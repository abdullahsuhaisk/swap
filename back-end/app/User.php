<?php

namespace App;

use App\Model\Ads;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','state_id','city_id','liked_category_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ads() {
        return $this->hasMany(Ads::class);
    }

    protected $table = 'users';
}
