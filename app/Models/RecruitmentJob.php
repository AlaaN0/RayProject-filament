<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentJob extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'job_title', 'recruitment_date'];
}
