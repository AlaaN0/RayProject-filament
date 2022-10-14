<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'date_birth', 'nationality', 'citizenship', 'phone', 'email', 'website'];
}
