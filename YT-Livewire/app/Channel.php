<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{

    protected $table = 'channels';
    protected $guarded = [];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
