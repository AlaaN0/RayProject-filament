<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlRay extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable =['title', 'content', 'news_date', 'category_id', 'featured_image', 'gallery'];

    protected $fillable = ['title', 'content', 'news_date', 'category_id', 'featured_image', 'gallery'];

    public function category() 
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
