<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    /** Get the slug column  */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
