<?php

namespace App\Http\Resources;
use App\Http\Resources\cityResource as CityResource;
use Illuminate\Http\Resources\Json\JsonResource;

class stateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'Ads' => $this->Ads,
          //  'city'=>new CityResource(\App\Model\City::find($this->id))
            'city'=> CityResource::collection($this->cities)

        ];
    }
}
