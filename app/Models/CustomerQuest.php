<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerQuest extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answers', 'is_required', 'is_active', 'answer_type'];
}
