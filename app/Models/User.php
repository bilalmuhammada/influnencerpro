<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    protected $appends = ['full_name',
       'image_url', 
       'influencer_profile_image_main',
       'is_favourite_influencer', 
       'instagram_followers', 
       'tiktok_followers',
       'facebook_followers',
       'country_name',
       'user_arts',
       'age',
       'created_at_formatted',
        'status_formatted',
       
        'member_since',
        'number_of_outlets',
        'number_of_deals',
        'pending_deals',
        'cancelled_deals',
        'amount_received',
        'amount_paid',
        'rating_influencer_pro',
        'rating_by_vendor',
        'submitted_files',
        'vendor_user_person_name',
        'country_name',
        'city_name'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function getMemberSinceAttribute()
    {
        return SiteHelper::reformatReadableDateTime($this->created_at);
    }
    public function getAgeAttribute()
    {
        return Carbon::parse($this->dob)->age;
    }

    public function getCreatedAtFormattedAttribute()
    {
        return SiteHelper::reformatToDateString($this->created_at);
    }
    public function getStatusFormattedAttribute()
    {
        return ucfirst(strtolower($this->status));
    }

    public function user_professional_detail()
    {
        return $this->hasOne(UserProfessionDetail::class, 'user_id', 'id');
    }

    public function personal_information()
    {
        return $this->hasOne(UserPersonalInformation::class, 'user_id', 'id');
    }
    public function spoken_languages()
    {
        return $this->hasMany(UserSpokenLanguage::class, 'user_id');
    }

    public function arts()
    {
        return $this->hasMany(UserArt::class);
    }

   

    public function features()
    {
        return $this->hasMany(UserFeature::class, 'user_id', 'id');
    }

    public function social_media_profiles()
    {
        return $this->hasMany(UserSocialMediaProfile::class, 'user_id', 'id');
    }

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->last_name;
    }

//    public function getImageUrlAttribute(){
//        return asset('assets/img/user/avatar-3.jpg');
//    }

    public function attachment()
    {
        return $this->hasOne(Attachment::class, 'object_id')->where('object', 'User')->where('context', '=', 'user-image');
    }

    public function influencer_profile_image_main()
    {
        return $this->hasOne(Attachment::class, 'object_id')
            ->where('object', 'User')
            ->where('context', '=', 'influencer-profile-image-main');
    }

    public function getInfluencerProfileImageMainAttribute()
    {
        $image= $this->influencer_profile_image_main()->first();

        if ($image) {
            return asset('uploads/users') . '/' . $image->name;
        } else {
            return 'https://via.placeholder.com/30x30';
        }
    }

    public function influencer_profile_images()
    {
        
        return $this->hasMany(Attachment::class,'object_id')
        ->where('object', 'User')
        ->where('context', '=', 'influencer-profile-image');
    }

    public function getNumberOfDealsAttribute()
    {
        return 10;
    }

    public function getSubmittedFilesAttribute()
    {
        return '20';
    }

    public function getNumberOfOutletsAttribute()
    {
        return '20';
    }
    

    public function getCancelledDealsAttribute()
    {
        return 7;
    }

    public function getAmountPaidAttribute()
    {
        return '$3000';
    }

    public function getVendorUserPersonNameAttribute()
    {
        return 'vendor name';
    }

     
    public function getAmountReceivedAttribute()
    {
        if ($this->subscription)
            return $this->subscription->amount_paid;
        else
            return 0;
    }
    public function getPendingDealsAttribute()
    {
        return 3;
    }

    public function getImageUrlAttribute()
    {
        // Get the first related influencer profile image
        $image = $this->influencer_profile_images()->first();
        // dd($image);

        if ($image) {
            return asset('uploads/users') . '/' . $image->name;
        } else {
            return 'https://via.placeholder.com/30x30';
        }
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class, 'influencer_id')->where('fr_in',1);
    }
    public function invented()
    {
        return $this->hasMany(Favourite::class, 'influencer_id')->where('fr_in',2);
    }

  

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'user_categories', 'user_id', 'category_id');
    }
    
    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class, 'category_user');
    // }
    
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getIsFavouriteInfluencerAttribute()
    {
        $favourite = Favourite::where('influencer_id', '=', $this->id)->where('user_id', SiteHelper::getLoginUserId())->first();
        if ($favourite) {
            return true;
        }

        return false;
    }

    public function getInstagramFollowersAttribute()
    {
        $insta = $this->social_media_profiles->where('type', '=', 'instagram')->first();
        if ($insta) {
            return formatNumber($insta->followers);
        }

        return 0;
    }
    public function subscription()
    {
        return $this->hasOne(Subscription::class)->where('status', '=', 'active');
    }
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }


    public function getTiktokFollowersAttribute()
    {
        $tiktok = $this->social_media_profiles->where('type', '=', 'tiktok')->first();
        if ($tiktok) {
            return formatNumber($tiktok->followers);
        }

        return 0;
    }

    public function getFacebookFollowersAttribute()
    {
        $facebook = $this->social_media_profiles->where('type', '=', 'facebook')->first();
        if ($facebook) {
            return formatNumber($facebook->followers);
        }

        return 0;
    }

    public function availabilities()
    {
        return $this->hasMany(UserAvailability::class);
    }

    public function getCountryNameAttribute()
    {
        return $this->country ? $this->country->name : '';
    }

    public function getUserArtsAttribute()
    {
        if ($this->arts)
            return implode(', ', $this->arts->pluck('art_name')->toArray());
        else
            return '';
    }



    public function getRatingInfluencerProAttribute()
    {
        return '3.5';
    }

    public function getRatingByVendorAttribute()
    {
        return '2.0';
    }

    public function getCityNameAttribute()
    {
        if ($this->city)
            return $this->city->name;
        else
            return '';
    }
}
