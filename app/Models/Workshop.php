<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Carbon\Carbon;

class Workshop extends Model
{
    public function scopeNotStarted($query)
    {
        $query->where("start", ">=", Carbon::now());
    }
}
