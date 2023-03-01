<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComputerController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Computers - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['computers'] = Computer::all();

        return view('computer.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $computer = Computer::findOrFail($id);

        $viewData['title'] = $computer['name'].' - Online Store';
        //$viewData["subtitle"] =  $computer["name"] . " - PC information";
        $viewData['computer'] = $computer;

        return view('computer.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create PC';

        return view('computer.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'photo' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'keywords' => 'required',
            'details' => 'required',
        ]);
        //dd($request->all());
        //here will be the code to call the model and save it to the database

        Computer::create($request->only(
            'name',
            'price',
            'photo',
            'brand',
            'category',
            'keywords',
            'details'
        ));

        return view('computer.save');
    }

    public function delete(string $id): View
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();

        return $this->index();
    }
}
