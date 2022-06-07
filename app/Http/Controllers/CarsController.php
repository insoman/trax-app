<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Http\Resources\CarsShowResource;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        return Cars::all();
    }

    public function show($id)
    {
        return new CarsShowResource(Cars::with('trips')->findOrFail($id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
           'year' => 'required|integer',
           'make' => 'required|string',
           'model' => 'required|string'
       ]);

        $car = Cars::create($data);

        return response()->json($car, 201);
    }

    public function destroy(Cars $car)
    {
        $car->delete();

        return response()->json(null, 204);
    }
}
