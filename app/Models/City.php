<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model 
{

    protected $table = 'cities';
    protected $fillable = ['name' , 'governorate_id'];
    public $timestamps = true;

    public function donationRequest()
    {
        return $this->hasMany('App\Models\DonationRequest');
    }

    public function governorate()
    {
        return $this->belongsTo('App\Models\Governorate');
    }

}