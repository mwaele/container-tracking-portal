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
        // Create and save container
        $container = new Container();
        $container -> vessel_type = $request -> vessel_type;
        $container -> vessel_name = $request -> vessel_name;
        $container -> schedule = $request -> schedule;
        $container -> call_sign = $request -> call_sign;
        $container -> voyage_in_out = $request -> voyage_in_out;
        $container -> eta = $request -> eta;
        $container -> loa = $request -> loa;
        $container -> draft = $request -> draft;
        $container -> agent = $request -> agent;
        $container -> disch = $request -> disch;
        $container -> load = $request -> load;
        $container -> eta = $request -> eta;
        $container -> remarks = $request -> remarks;
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
        $Container = Container::where('id', $id)->first();

        if (!$Container) {
            return redirect()->route('containers.index')->with('error', 'Record not found');
        }

        $Container->delete();
        return redirect()->route('containers.index')->with('success', 'Record deleted successfully');
    }
}
