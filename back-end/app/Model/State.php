<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\City;
class State extends Model
{
    public function cities() {
        return $this->hasMany(City::class);
    }
    public function Ads() {
        return $this->hasMany(Ads::class);
    }
}
