<?php

namespace App\Models;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    // restricts columns from modifying
    protected $guarded = [];

    // returns post of any comment
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // returns the instance of the user who is owner of that comment
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
