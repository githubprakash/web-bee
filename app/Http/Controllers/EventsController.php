<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Routing\Controller as BaseController;

class EventsController extends BaseController
{
    public function getEventsWithWorkshops() {
        
        return response()->json(Event::with('workshops')->get(), 200);
    }

    public function getFutureEventsWithWorkshops() {
        
        
        return response()->json(Event::notStarted()->with('workshops', function($query){
                    $query->notStarted();
                })->get(), 200);
    }
}
