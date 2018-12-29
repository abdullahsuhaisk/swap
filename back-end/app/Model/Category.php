<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Ads() {
        return $this->hasMany(Ads::class);
    }

}
