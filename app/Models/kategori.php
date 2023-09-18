<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class kategori extends Model
{
    protected $guarded = [];  

    use HasFactory;


    // public function blog(): BelongsToMany
    // {
    //     return $this->belongsToMany(Blog::class, 'role_user');
    // }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}
