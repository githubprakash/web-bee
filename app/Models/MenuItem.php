<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    
    public function scopeMainMenu($query)
    {
        return $query->whereNull("parent_id");
    }
    
    public function children()
    {
       return $this->hasMany("App\Models\MenuItem", "parent_id")->with('children');
    }
    
}
