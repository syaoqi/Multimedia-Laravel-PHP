<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
