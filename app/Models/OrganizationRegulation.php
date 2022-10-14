<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationRegulation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'attachment'];
}
