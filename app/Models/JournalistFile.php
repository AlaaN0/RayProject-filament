<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JournalistFile extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content','news_date', 'category_id', 'featured_image', 'gallery'];


    public function category() 
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
