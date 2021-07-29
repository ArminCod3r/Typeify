<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{    
    protected $table      = 'comments';
    public    $primaryKey = 'id';
    protected $fillable   = [ 'id', 'user_id', 'body', 'approved', 'created_at','updated_at' ];
    public    $timestamps = true;


    public function user()
    {
    	return $this->hasMany(User::class, 'id', 'user_id');
    }
}
