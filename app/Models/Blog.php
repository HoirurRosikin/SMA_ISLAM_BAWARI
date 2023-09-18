<?php

namespace App\Models;

use App\Models\User;
use App\Models\kategori;
use App\Models\lampiran;
use App\Models\image_blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Blog extends Model
{
    protected $guarded = [];  
    use HasFactory;

    // public function image_blog(): BelongsTo
    // {
    //     return $this->belongsTo(image_blog::class);
    // }

    public function image_blog()
    {
        return $this->hasMany(image_blog::class);
    }
    public function lampiran()
    {
        return $this->hasMany(lampiran::class);
    }
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class,'kategori_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
