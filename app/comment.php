<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $guard = 'comment';

   	protected $fillable = [
   		'name',
   		'comment',
   	];

    public function User()
    {
    	 return $this->belongsTo(User::class);
    }
}
