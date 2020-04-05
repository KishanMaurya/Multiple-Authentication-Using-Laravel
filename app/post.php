<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class post extends Authenticatable
{
	use Notifiable;

   	protected $guard = 'post';

   	protected $fillable = [
   		'title',
   		'body',
   		'image',
      'post_id',
      'writer_id',
   	];

    public function User()
    {
    	return $this->hashMany(User::class);
    }
    public function writer()
    {
    	return $this->hashMany(writer::class);
    }
    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
