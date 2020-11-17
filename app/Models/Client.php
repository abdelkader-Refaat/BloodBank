<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class Client extends Model 
{
     use HasRoles;
     protected $guard_name = 'web';

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'email');

    public function posts()
    {
        return $this->morphedByMany('App\Models\Post', 'clientable');
    }

    public function governorates()
    {
        return $this->morphedByMany('App\Models\Governorate', 'clientable');
    }

    public function bloodTypes()
    {
        return $this->morphedByMany('App\Models\BloodType', 'clientable');
    }

    public function notifications()
    {
        return $this->morphedByMany('App\Models\Notification', 'clientable');
    }

    public function donation_requests()
    {
        return $this->hasMany('App\Models\DonationRequest');
    }

    public function tokens()
    {
        return $this->hasMany('App\Models\Token');
    }

}