<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinations;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class DestinationsController extends Controller
{
    public function index():View
    {
        $destinations = Destinations::latest()->paginate(5);
        return view('destinations.index', compact('destinations'));
    }

    public function create():View
    {
        return view('destinations.create');
    }

    public function store(Request $request):RedirectResponse
    {
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'details' => 'required',
            'day_open' => 'required',
            'time_open' => 'required',
            'pricing' => 'required'
        ]);

        Destinations::create([
            'id' => $request->id,
            'name' => $request->name,
            'location' => $request->location,
            'details' => $request->details,
            'day_open' => $request->day_open,
            'time_open' => $request->time_open,
            'pricing' => $request->pricing
        ]);
    }

    public function show(string $id):View
    {
        $Destinations = Destinations::findOrFail($id);
        return view('destination.show', compact('destinations'));
    }

    public function edit(string $id):View
    {
        $Destinations = Destinations::findOrFail($id);
        return view('destinations.edit', compact('destinations'));
    }



    public function update(Request $request, string $id):RedirectResponse
    {
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'details' => 'required',
            'day_open' => 'required',
            'time_open' => 'required',
            'pricing' => 'required'
        ]);

        Destinations::update([
            'id' => $request->id,
            'name' => $request->name,
            'location' => $request->location,
            'details' => $request->details,
            'day_open' => $request->day_open,
            'time_open' => $request->time_open,
            'pricing' => $request->pricing
        ]);
    }

    public function destroy(string $id):RedirectResponse
    {
        $destinations = Destinations::findOrFail($id);
        
        $destination->delete();

        session()->flash("pesan", "Data berhasil dihapus");
        return redirect()->route('destinations.index')->with(['success'=>'Data berhasil dihapus']);
    }
}
