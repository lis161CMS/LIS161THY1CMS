<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
  protected $fillable = [
   'content','revisionNo','content_id','user_id'
  ];
}
