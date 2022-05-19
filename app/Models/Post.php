<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
    ];

    public function detailpenulis() {
        return $this->belongsTo(User::class,'user_id','id');
    }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }
}
