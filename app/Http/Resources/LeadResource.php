<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeadResource extends JsonResource
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
            'name' => $this->name,
            'phone' => $this->phone,
            'easy_downPayment' => $this->easy_downPayment,
            'high_downPayment' => $this->high_downPayment,
            'horizontal_complex' => $this-> horizontal_complex,
            'vertical_complex' => $this->vertical_complex,
            'area_100_200' => $this->area_100_200,
            'area_200_400' => $this->area_200_400,
            'middle_location' => $this->middle_location,
            'suburbs_location' => $this->suburbs_location,
            'out_bg_middle_cities' => $this->out_bg_middle_cities,
            'out_bg_south_cities' => $this->out_bg_south_cities,
            'out_bg_kurdistan' => $this->out_bg_kurdistan,
            'purpose_purchase' => $this->purpose_purchase,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d')
        ];
    }
}
