<?php

namespace App\Models;

use App\Models\AlRay;
use App\Models\Archive;
use App\Models\JournalistFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function archives() 
    {
        return $this->hasMany(Archive::class,'category_id');
    }

    public function journalist_files() 
    {
        return $this->hasMany(JournalistFile::class,'category_id');
    }

    public function rays() 
    {
        return $this->hasMany(AlRay::class,'category_id');
    }

    public function events() 
    {
        return $this->hasMany(Event::class,'category_id');
    }
}
