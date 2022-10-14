<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerSlider extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'link','status', 'images'];
}
