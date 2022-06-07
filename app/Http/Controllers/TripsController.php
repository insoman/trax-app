<?php

namespace App\Http\Controllers;

use App\Http\Resources\TripsIndexResource;
use App\Trips;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    public function index()
    {
        return Trips::with('cars')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
           'date' => 'required|date', // ISO 8601 string
           'cars_id' => 'required|integer',
           'miles' => 'required|numeric'
        ]);

        // There was no specification what `total` in fact is?
        // Is it total miles per day? Or per car?
        $data['total'] = $request['miles'];
        $data['date'] = Carbon::parse($data['date']);

        return Trips::create($data);
    }
}
