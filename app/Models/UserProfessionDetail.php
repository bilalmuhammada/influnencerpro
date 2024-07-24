<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfessionDetail extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['price_formatted', 'available_from_date_formatted', 'available_from_date_formatted', 'professional_category', 'price_include_formatted'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceFormattedAttribute()
    {
        return  '$'.' '. number_format($this->price);
    }

    public function getPriceIncludeFormattedAttribute()
    {
        return '$'.' '. number_format($this->price_include);
    }

    public function getAvailableFromDateFormattedAttribute()
    {
        if ($this->available_from_date)
            return SiteHelper::reformatReadableDate($this->available_from_date);
        else
            return '';
    }

    public function getAvailableToDateFormattedAttribute()
    {
        if ($this->available_to_date)
            return SiteHelper::reformatReadableDate($this->available_to_date);
        else
            return '';
    }

    public function getProfessionalCategoryAttribute($value)
    {
        $arts = StaticDatabase::getArts();

        // Search for the value in the collection
        $matchingArt = $arts->firstWhere('key', $value);

        if ($matchingArt) {
            return $matchingArt->name;
        }

        return '';
    }
}
