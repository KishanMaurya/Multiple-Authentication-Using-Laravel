<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class writer extends Authenticatable
{
   use Notifiable;

   protected $guard = 'writer';

   protected $fillable = [
   	'name',
   	'email',
   	'password',
   ];

   protected $hidden = [
   	'password',
   	'remember_token',
   ];
}
