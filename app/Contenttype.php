<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenttype extends Model
{
	protected $table = 'contenttypes';
	protected $fillable = [
  		'contentType','contentTypeDesc','user_id'
	];
}
