<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FlightController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Flights - Parcial 01';
        $viewData['subtitle'] = 'List of flights';
        $viewData['flights'] = Flight::all();

        return view('flight.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $flight = Flight::findOrFail($id);

        $viewData['title'] = $flight['name'].'Flights - Parcial 01';
        $viewData['flight'] = $flight;

        return view('flight.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Register Flight';

        return view('flight.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|min_digits:0',
        ]);
        //dd($request->all());
        //here will be the code to call the model and save it to the database

        Flight::create($request->only(
            'name',
            'type',
            'price',
        ));

        return redirect('flights');
    }

    public function delete(string $id)
    {
        Flight::findOrFail($id);

        Flight::where('id', $id)->delete();

        return redirect('flights');
    }
}
