<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function post() {
     
        return $this->belongsToMany(Post::class);
            }
    public function video() {
     
        return $this->belongsToMany(Video::class);
            }
        //     public function tag() {
        
        // return $this->belongsToMany(Tag::class);
        //     }
            public function tags() {
        
        // return $this->belongsToMany(Tag::class);
        return $this->hasMany(Tag::class);
            }
}
