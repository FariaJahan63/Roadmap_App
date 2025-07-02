<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['comment','parent_id','depth','user_id', 'roadmap_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->with('replies', 'user')->orderBy('created_at');
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }


}