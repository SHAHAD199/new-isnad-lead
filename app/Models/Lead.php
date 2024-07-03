<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'phone',
        'easy_downPayment',
        'high_downPayment',
        'horizontal_complex',
        'vertical_complex',
        'area_100_200',
        'area_200_400',
        'middle_location',
        'suburbs_location',
        'out_bg_middle_cities',
        'out_bg_south_cities',
        'out_bg_kurdistan',
        'purpose_purchase'
    ];
}
