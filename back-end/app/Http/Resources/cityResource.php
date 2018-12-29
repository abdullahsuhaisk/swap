<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class cityResource extends JsonResource
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
            'name'=>$this->name,
            'total_Ads' => $this->Ads->count()
        ];
    }
}
