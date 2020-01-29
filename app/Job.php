<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** Attributes that are mass assignable */
    // protected $fillable = ['job_title', 'job_description','salary','job_type','slug'];
    protected $guarded = [];

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
