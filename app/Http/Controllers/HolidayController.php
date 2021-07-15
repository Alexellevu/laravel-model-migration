<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HolidayController extends Controller
{
    public function index()
    {
        $holidays = Holiday::all();
        ddd($holidays);
        return view('holiday', compact('holidays'));
    }
}
