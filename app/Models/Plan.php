<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Plan extends Model
{
    use HasFactory;

    protected $appends = ['price_formatted', 'vat_price', 'total_amount', 'discounted_price', 'discounted_price_formatted'];

    public function getPriceFormattedAttribute()
    {
        $price = $this->price . " ";

//        if (Session::has('country')) {
//            $Country = Country::find(Session::get('country'));
//            return $price .= $Country->currency;
//        }

        return $price .= $this->currency;
    }

    public function getVatPriceAttribute()
    {
        return ($this->price / 100) * 5;
    }

    public function getVatPriceFormattedAttribute()
    {
        $vat = ($this->price / 100) * 5 . " ";

//        if (Session::has('country')) {
//            $Country = Country::find(Session::get('country'));
//            return $vat .= $Country->currency;
//        }

        return $vat .= $this->currency;
    }

    public function getTotalAmountAttribute()
    {
        return $this->price + ($this->price / 100) * 5;
    }

    public function getTotalAmountFormattedAttribute()
    {
        $total_amount = $this->price + ($this->price / 100) * 5 . " ";

//        if (Session::has('country')) {
//            $Country = Country::find(Session::get('country'));
//            return $total_amount .= $Country->currency;
//        }

        return $total_amount .= $this->currency;
    }

    public function getActualPriceFormattedAttribute()
    {
        $total_amount = $this->actual_price . " ";

//        if (Session::has('country')) {
//            $Country = Country::find(Session::get('country'));
//            return $total_amount .= $Country->currency;
//        }

        return $total_amount .= $this->currency;
    }
}
