<?php

namespace App\Http\Resources\Tiket;

use App\Http\Resources\Bus\BusResource;
use App\Http\Resources\City\CityResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TiketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'image_url' => $this->image_url,
            'count' => $this->count,
            'city' => new CityResource($this->city),
            'bus' => new BusResource($this->bus),
        ];
    }
}
