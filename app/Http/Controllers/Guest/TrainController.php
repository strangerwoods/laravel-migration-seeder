<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
		//Only trains that are from today or in the future
        //$trains = Train::where('departure_time', '>=', now())->get();

		//All trains
        $trains = Train::all();
        
		return view('home', compact('trains'));
    }
}
