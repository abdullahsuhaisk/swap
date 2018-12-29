<?php

namespace App\Http\Resources;

use App\Model\State;
use Illuminate\Http\Resources\Json\JsonResource;

class AdsResource extends JsonResource
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
            'user_id'=>$this->user_id,
            'title'=>$this->title,
            'description'=>$this->desc,
            'condition'=>$this->condition,
            'view_count'=>$this->view,
            'swap_count'=>$this->swapCount,
            'state_id'=>$this->state_id,//new stateResource($this->state), //stateResource::collection($this->state),
            'city_id'=>$this->city_id,
            'category_id'=>$this->category_id
        ];
    }
}
