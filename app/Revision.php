<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Revision extends Model
{
	use SoftDeletes;
	protected $dates =['deleted_at'];

  protected $fillable = [
   'content','revisionNo','content_id','user_id'
  ];

  public function contents()
    {
        return $this->belongsTo('App\Content','content_id');
    }
}
