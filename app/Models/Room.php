<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Room extends Model
{
    use HasFactory;
    public function comment(){
        return $this->belongsToMany(Comment::class);
    }
}
