<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // restricts columns from modifying
    protected $guarded = [];

    // posts has many comments
    // returns all comments on that post
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // returns the instance of the user who is author of that post
    // public function author()
    // {
    //     return $this->belongsTo(User::class, $foreignKey = 'user_id', $ownerKey = 'id', $relation = 'users');
    // }

    // returns the instance of the user who is author of that post
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
