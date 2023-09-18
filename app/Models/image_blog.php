<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class image_blog extends Model
{
    protected $guarded = [];  
    use HasFactory;



    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class,'blog_id');
    }
}
