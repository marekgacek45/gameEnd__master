<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Video;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
