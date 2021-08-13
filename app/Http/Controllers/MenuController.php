<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller as BaseController;

class MenuController extends BaseController
{
    public function getMenuItems() {
        return response()->json(MenuItem::mainMenu()->with('children')->get(), 200);
    }
}
