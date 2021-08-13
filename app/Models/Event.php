<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    public function workshops()
    {
        return $this->hasMany('App\Models\Workshop');
    }
    
    public function scopeNotStarted($query)
    {
        return $query->whereHas("workshops", function($query) {
            return $query->where("start", ">=", Carbon::now());
        });
    }
}
