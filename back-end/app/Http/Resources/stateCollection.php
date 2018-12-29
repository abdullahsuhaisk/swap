<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class stateCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     * isteğe cevap ver
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'id'=>$this->id,
            'cities'=>cityResource::collection($this->cities),

        ];
    }
}
