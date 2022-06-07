<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $tripMiles = 0;
        foreach ($this->trips as $trip) {
            $tripMiles += $trip->miles;
        }

        return [
            'id' => $this->id,
            'make' => $this->make,
            'model' => $this->model,
            'year' => $this->year,
            'trip_count' => count($this->trips),
            'trip_miles' => $tripMiles,
        ];
    }
}
