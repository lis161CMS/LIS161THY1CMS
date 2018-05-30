<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use SoftDeletes;

    protected $dates =['deleted_at'];
    protected $fillable = [
     'contentTitle','contentType_id','user_id'
    ];

    public function revisions() {
        return $this->hasMany('App\Revision');
    }
}
