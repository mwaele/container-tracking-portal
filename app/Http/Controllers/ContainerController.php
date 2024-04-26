<?php

namespace App\Http\Controllers;
use App\Models\Container;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    public function index()
    {
        // Logic to show all containers
        // Retrieve all containers from the database
        $containers = Container::all();

        // Pass containers data to the view
        return view('containers.index', ['containers' => $containers]);
    }

    public function create()
    {
        // Logic to show create container form
        return view('containers.create');
    }

    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'vessel_type',
            'vessel_name' => 'required',
            'schedule' => 'required',
            'call_sign',
            'voyage_in_out',
            'eta',
            'loa',
            'draft',
            'agent',
            'disch',
            'load',
            'remarks',
        ]);

        // Create and save container
        $container = new Container();
        $container->fill( $validatedData );
        $container->save();

        // Redirect or return response
        return redirect()->route('containers.index')->with('success', 'Container created successfully');
    }

    public function show($id)
    {
        // Logic to show a specific container
    }

    public function edit($id)
    {
        // Logic to show edit container form
    }

    public function update(Request $request, $id)
    {
        // Logic to update container
    }

    public function destroy($id)
    {
        // Logic to delete container
    }
}
