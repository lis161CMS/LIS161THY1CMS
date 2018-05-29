<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public static function boot() {
        parent::boot();

        static::updating(function($content) {
            $content->saveRevision();
        });
    }

    public function revisions() {
        return $this->hasMany(Revision::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function saveRevision() {
        $changed = $this->getDirty();
        $before = array_intersect_key($this->fresh()->toArray(), $changed);
        $after = $changed;

        return Revision::create([
            'user_id' => auth()->user()->id,
            'content_id' => $this->id,
            'before' => $before,
            'after' => $after
        ]);
    }
}
