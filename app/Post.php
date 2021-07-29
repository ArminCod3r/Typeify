<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table      = 'posts';
    public    $primaryKey = 'id';
    protected $fillable   = [ 'id', 'title', 'body', 'created_at','updated_at' ];
    public    $timestamps = true;

    public function comments()
    {
    	return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
