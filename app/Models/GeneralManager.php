<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralManager extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nid','phone', 'city', 'message_title', 'message'];
}
