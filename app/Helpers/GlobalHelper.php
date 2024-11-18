<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

function getDropdownMenu($role)
{
    $DropdownMenus = \App\Models\User::with('role')->whereHas('role', function ($Role) use ($role) {
        $Role->where('code', $role);
    })->limit(5)->get();

    return $DropdownMenus;
}
function getCategories()
{
    $Categories = \App\Models\Category::where('status', 'active')->orderBy('sequence', 'asc')->get();

    return $Categories;
}
function getnationality()
{
    $nationality = DB::table('nationality')->orderBy("name",'ASC')->get();

    return $nationality;
}

function getCategoriesforlandingpage()
{
    $Categories = \App\Models\Category::where('status', 'active')->whereNotNull('sequence')->orderBy('sequence', 'asc')->get();

    return $Categories;
}

function getLoggedInRole()
{
    return session()->get('Role')->code;
}

function getSpokenLanguages()
{
    $SpokenLanguages = \App\Models\SpokenLanguage::all();

    return $SpokenLanguages;
}

function getEthnicity()
{
    $Ethnicity = \App\Models\Ethnicity::orderBy('name', 'asc')->get();

    return $Ethnicity;
}

function getCountries()
{
    $Countries = \App\Models\Country::all();

    return $Countries;
}

function getlanguge()
{
    $languages = DB::table('languages')->orderBy("name",'ASC')->get();

    return $languages;
}

function getStateByCountryId($countryId)
{
    $States = \App\Models\State::where('country_id', $countryId)->get();

    return $States;
}

function getCityByStateId($stateId)
{
    $Cities = \App\Models\City::where('state_id', $stateId)->get();

    return $Cities;
}

function getCityByStateIds($stateId)
{
    $Cities = \App\Models\City::whereIn('state_id', $stateId)->get();

    return $Cities;
}

function getFeatures()
{
    $Features = \App\Models\Feature::all();

    return $Features;
}

function getInfluencersByCategoryId($categoryId)
{
    $Influencers = User::with(['role', 'user_professional_detail'])->whereHas('role', function ($Role) {
        $Role->where('code', 'influencer');
    })->whereHas('user_professional_detail', function ($UserProfessionalDetail) use ($categoryId) {
        $UserProfessionalDetail->where('category_id', $categoryId);
    })->get();

    return $Influencers;
}

function getInfluencerById($userId)
{
    $Influencer = User::with(
        [
            'city',
            'state',
            'country',
            'role',
            'categories',
            'user_professional_detail.category',
            'personal_information' => [
                'spoken_language',
                'ethnicity',
            ],
            'features',
            'social_media_profiles',
            'influencer_profile_images'
        ]
    )->whereHas('role', function ($Role) {
        $Role->where('code', 'influencer');
    })->find($userId);

    return $Influencer;
}

function formatNumber($number, $precision = 1)
{
    $abbrevs = ['k', 'M', 'B', 'T'];

    // dd(is_string($number));
    if (is_string($number)) {
        return $number;
    }else{
    for ($index = count($abbrevs) - 1; $index >= 0; $index--) {
        $divisor = pow(1000, $index + 1);

        if ($number >= $divisor) {
            return round($number / $divisor, $precision) . $abbrevs[$index];
        }
    }

    return number_format($number);

}
}




function getInfluencerSocialMediaProfileByTypeAndId($type, $userId)
{
    $UserSocialMediaProfile = \App\Models\UserSocialMediaProfile::where('type', $type)->where('user_id', $userId)->first();

    return $UserSocialMediaProfile;
}

function getInfluencersByCategoryIdAndFilter($filter)
{
    
    $categoryId = $filter->id;
    $query = User::with(['role', 'user_professional_detail', 'personal_information', 'features', 'social_media_profiles'])
        ->whereHas('role', function ($role) {
            $role->where('code', 'influencer');
        })->when($filter->category_id, function ($query) use ($categoryId, $filter) {
            $query->whereHas('user_professional_detail', function ($userProfessionalDetail) use ($categoryId, $filter) {
                if ($filter->source == 'web') {
                    $userProfessionalDetail->whereIn('category_id', $filter->category_id);
                } else {
                    $userProfessionalDetail->where('category_id', $categoryId);
                }
            });
        })->when($filter->country_id, function ($query) use ($filter) {
            if ($filter->source == 'web') {
                $query->whereIn('country_id', $filter->input('country_id'));
            } else {
                $query->where('country_id', $filter->input('country_id'));
            }
        })->when($filter->state_id, function ($query) use ($filter) {
            $query->where('state_id', $filter->input('state_id'));
        })->when($filter->city_id, function ($query) use ($filter) {
            if ($filter->source == 'web') {
                $query->whereIn('city_id', $filter->input('city_id'));
            } else {
                $query->where('city_id', $filter->input('city_id'));
            }
        })->when($filter->status, function ($query) use ($filter) {
            $query->where('status', $filter->input('status'));
        });

    $query = applySocialMediaFilter($query, $filter, ['instagram', 'facebook', 'tiktok', 'twitter', 'youtube', 'website','pinterest','snapchat']);
    
  
    $query = applyInfluencerFollowersFilter($query, $filter, ['nano', 'micro', 'small', 'medium', 'large', 'mega']);
  
    $query = applyNameFilter($query, $filter);
    $query = applyGenderFilter($query, $filter, ['MALE', 'FEMALE', 'OTHER']);

    if ($filter->source == 'web') {
        $query = applyAdditionalCriteriaFilterForWeb($query, $filter);
    } else {
        $query = applyAdditionalCriteriaFilter($query, $filter);
    }
  
    $influencers = $query->get();
    // dd($influencers );
    return $influencers;
}

function applySocialMediaFilter($query, $request, $socialMediaTypes)
{
    $activeSocialMediaTypes = [];

    foreach ($socialMediaTypes as $type) {
        if ($request->has($type) && $request->input($type) === 'on') {
            $activeSocialMediaTypes[] = $type;
        }
    }

    if (!empty($activeSocialMediaTypes)) {
        $query->whereHas('social_media_profiles', function ($socialMediaProfiles) use ($activeSocialMediaTypes) {
            $socialMediaProfiles->whereIn('type', $activeSocialMediaTypes);
        });
    }

    return $query;
}

function applyInfluencerFollowersFilter($query, $request, $followerTypes)
{
    $followersRanges = [
        'nano' => [1, 25000],
        'micro' => [25001, 500000],
        'small' => [500001, 1000000],
        'medium' => [1000000, 5000000], // 300-500k
        'large' => [5000001, 50000000], // 500k-1M
        'mega' => [50000001, PHP_INT_MAX], // 1M+
    ];

    foreach ($followerTypes as $followerType) {
        if ($request->has($followerType) && $request->input($followerType) === 'on') {
            if (array_key_exists($followerType, $followersRanges)) {
                $range = $followersRanges[$followerType];
                $query->whereHas('social_media_profiles', function ($socialMediaProfiles) use ($range) {
                    $socialMediaProfiles->whereBetween('followers', $range);
                });
            }
        }
    }

    return $query;
}

function applyNameFilter($query, $request)
{
    $name = $request->input('influencer_name');

    $query->when($name, function ($User) use ($name) {
        $User->where('name', 'like', '%' . $name . '%')->where('last_name', 'like', '%' . $name . '%');
    });

    return $query;
}

function applyGenderFilter($query, $request, $genders)
{
    $normalizedGenders = array_map('strtoupper', $genders); // Convert all values to uppercase

    $genderFromFrontEnd = $request->input('gender'); // Get gender from front-end

    if (in_array(strtoupper($genderFromFrontEnd), $normalizedGenders)) {
        // If the gender from the front-end is valid, apply the filter
        $query->whereHas('personal_information', function ($userProfessionalDetail) use ($normalizedGenders, $genderFromFrontEnd) {
            $userProfessionalDetail->whereIn('gender', in_array(strtoupper($genderFromFrontEnd), $normalizedGenders) ? [$genderFromFrontEnd] : $normalizedGenders);
        });
    } else {
        // Handle invalid gender or no gender selected from the front-end
    }

    return $query;
}

function applyAdditionalCriteriaFilter($query, $request)
{
    return $query->when($request->min_value && $request->max_value, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->whereBetween('age', [$request->input('min_value'), $request->input('max_value')]);
        });
    })->when($request->ethnicity_id, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('ethnicity_id', $request->input('ethnicity_id'));
        });
    })->when($request->tattoo == 'yes', function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->whereNotNull('tattoes');
        });
    })->when($request->tattoo == 'no', function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->whereNull('tattoes');
        });
    })->when($request->hair_type, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('hair_type', 'like', "%" . $request->input('hair_type') . "%");
        });
    })->when($request->hair_color, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('hair_color', 'like', "%" . $request->input('hair_color') . "%");
        });
    })->when($request->spoken_language_id, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('spoken_language_id', $request->input('spoken_language_id'));
        });
    })->when($request->art, function ($query) use ($request) {
        $query->whereHas('user_professional_detail', function ($user_professional_detail) use ($request) {
            $user_professional_detail->whereIn('professional_category', $request->input('art'));
        });
    });
}

function applyAdditionalCriteriaFilterForWeb($query, $request)
{
    $hair_types = getValuesFromObjectOfArray(json_decode($request->input('hair_types')));
    $age = getValuesFromObjectOfArray(json_decode($request->input('age')));
    $hair_colors = getValuesFromObjectOfArray(json_decode($request->input('hair_color')));
    $eye_colors = getValuesFromObjectOfArray(json_decode($request->input('eye_color')));
//dd($hair_types);
    return $query->when($request->min_value && $request->max_value, function ($query) use ($age) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($age) {
            $user_professional_detail->whereBetween('age', $age);
        });
    })->when($request->ethnicity_ids, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->whereIn('ethnicity_id', $request->input('ethnicity_ids'));
        });
    })->when($request->shoes_size, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('shoes_size', 'like', '%' . $request->input('shoes_size') . '%');
        });
    })->when($request->height, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('height', $request->input('height'));
        });
    })->when($request->width, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('width', $request->input('width'));
        });
    })->when($request->is_collaboration, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('is_collaboration', $request->input('is_collaboration'));
        });
    })->when($request->tattoo == 'yes', function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->whereNotNull('tattoes');
        });
    })->when($request->tattoo == 'no', function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->whereNull('tattoes');
        });
    })->when($request->hair_type, function ($query) use ($hair_types) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($hair_types) {
            $user_professional_detail->whereIn('hair_type', $hair_types);
        });
    })->when($request->hair_color, function ($query) use ($hair_colors) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($hair_colors) {
            $user_professional_detail->where('hair_color', $hair_colors);
        });
    })->when($request->spoken_language_ids, function ($query) use ($request) {
        $query->whereHas('personal_information', function ($user_professional_detail) use ($request) {
            $user_professional_detail->whereIn('spoken_language_id', $request->input('spoken_language_ids'));
        });
    })->when($request->art, function ($query) use ($request) {
        $query->whereHas('user_professional_detail', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('professional_category', $request->input('art'));
        });
    })->when($request->availability_from_date, function ($query) use ($request) {
        $query->whereHas('user_professional_detail', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('available_from_date', '>=', $request->input('availability_from_date'));
            $user_professional_detail->where('available_to_date', '<=', $request->input('availability_to_date'));
        });
    })->when($request->min_price, function ($query) use ($request) {
        $query->whereHas('user_professional_detail', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('price', '>=', $request->input('min_price'));
        });
    })->when($request->max_price, function ($query) use ($request) {
        $query->whereHas('user_professional_detail', function ($user_professional_detail) use ($request) {
            $user_professional_detail->where('price', '>=', $request->input('max_price'));
        });
    });
}

function getValuesFromObjectOfArray($array)
{
    $values = array();
    if (!empty($array))
        foreach ($array as $key => $value) {
            $values[] = $value->value;
        }
    return $values;
}

function hasFavoritedInfluencers($influencer_id, $user_id)
{
    $Favourite = \App\Models\Favourite::where('user_id', $user_id)->where('influencer_id', $influencer_id)->first();

    if ($Favourite) {
        return true;
    }

    return false;
}

function getUnreadMessages()
{
    $Messages = \App\Models\Message::with(['receiver','sender'])->where('receiver_id', \App\Helpers\SiteHelper::getLoginUserId())->where('is_readed', 0)->get();
    return $Messages;
}

function getSafeValueFromObject($object, $index='', $default = '')
{
    

    // Check if the object is null or not an object
    if (empty($object) || !is_object($object)) {
        return $default;
    }

    


    // Check if the index exists and is not null
    if (isset($object->$index) && !empty($object->$index)) {
     
        return $object->$index;
    }


    return $default;

}

function getArts()
{
    return \App\Models\StaticDatabase::getArts();
}

function formatDateToread($date)
{
    // dd(    gettype($date) );
  
    if ($date) {
        try {
            // Create a Carbon instance from the given format
            $carbonDate = Carbon::createFromFormat('Y-m-d', $date);

           
            // Format the date as 'd-M-Y'
            return $carbonDate->format('d-m-Y');
        } catch (\Exception $e) {
            // Handle exception if the format is incorrect
            return 'Invalid date';
        }
    } else {
        return '';
    }
}






