<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function state() {
        return $this->belongsTo(State::class);
    }
    public function city() {
        return $this->belongsTo(City::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
