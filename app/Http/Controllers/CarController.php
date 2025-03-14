<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->has('search') && !empty($request->search)) {
            $query->where('brand', 'LIKE', '%' . $request->search . '%')
                ->orWhere('model', 'LIKE', '%' . $request->search . '%');
        }

        $sortBy = $request->get('sort', 'created_at');
        $sortDirection = $request->get('direction', 'desc');

        $query->orderBy($sortBy, $sortDirection);

        $cars = $query->paginate($request->get('per_page', 10));

        return response()->json($cars);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1886|max:' . date('Y'),
            'price_per_day' => 'required|numeric|min:0',
            'status' => 'required|in:available,rented,maintenance',
        ]);

        $car = Car::create($request->all());
        return response()->json($car, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return response()->json($car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'sometimes|required|string|max:255',
            'model' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer|min:1886|max:' . date('Y'),
            'price_per_day' => 'sometimes|required|numeric|min:0',
            'status' => 'sometimes|required|in:available,rented,maintenance',
        ]);

        $car->update($request->all());
        return response()->json($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json(null, 204);
    }
}
