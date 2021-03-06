<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function getRules() {

        return [
            'content' => 'required|max:1000',
        ];
    }

    public function user() {

        return $this->belongsTo('App\User');
    }

    public function replies() {

        return $this->hasMany('App\Comment', 'parent_id', 'id');
    }
}
