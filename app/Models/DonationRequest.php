<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model 
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = array('hospital_name', 'hospital_address', 'latitude', 'longitude');

    public function notifications()
    {
        return $this->hasMany('App\Models\Notification');
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function bloodTypes()
    {
        return $this->hasMany('App\Models\BloodType');
    }

    public function clients()
    {
        return $this->belongsTo('App\Models\Client');
    }

}