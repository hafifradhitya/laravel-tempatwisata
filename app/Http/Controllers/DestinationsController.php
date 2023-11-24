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
    public function index(Request $request):View
    {
        $search = $request->search;

        if(!empty($search)){
            $destinations = Destinations::latest()->where('name','like', "%$search%")->paginate(5);
            $destinations = Destinations::latest()->where('location','like', "%$search%")->paginate(5);
            $destinations = Destinations::latest()->where('details','like', "%$search%")->paginate(5);
            $destinations = Destinations::latest()->where('day_open','like', "%$search%")->paginate(5);
            $destinations = Destinations::latest()->where('time_open','like', "%$search%")->paginate(5);
            $destinations = Destinations::latest()->where('pricing','like', "%$search%")->paginate(5);
            
        }else{
            $destinations = Destinations::latest()->paginate(5); 
        }

        
        return view('destinations.index', compact('destinations'));
    }

    public function create():View
    {
        return view('destinations.create');
    }

    public function store(Request $request):RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'details' => 'required',
            'day_open' => 'required',
            'time_open' => 'required',
            'pricing' => 'required'
        ]);

        Destinations::create([
            'name' => $request->name,
            'location' => $request->location,
            'details' => $request->details,
            'day_open' => $request->day_open,
            'time_open' => $request->time_open,
            'pricing' => $request->pricing
        ]);

        session()->flash("pesan", "Data Berhasil ditambah");
        return redirect()->route('destinations.index')->with(['success'=>'Data berhasil ditambah']);
    }

    public function show(string $id):View
    {
        $destinations = Destinations::findOrFail($id);
        return view('destinations.show', compact('destinations'));
    }

    public function edit(string $id):View
    {
        $destinations = Destinations::findOrFail($id);
        return view('destinations.edit', compact('destinations'));
    }



    public function update(Request $request, string $id):RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'details' => 'required',
            'day_open' => 'required',
            'time_open' => 'required',
            'pricing' => 'required'
        ]);

        $destinations = Destinations::findOrFail($id);

        $destinations->update([
            'name' => $request->name,
            'location' => $request->location,
            'details' => $request->details,
            'day_open' => $request->day_open,
            'time_open' => $request->time_open,
            'pricing' => $request->pricing
        ]);

        session()->flash("pesan", "Data berhasil diedit");
        return redirect()->route('destinations.index')->with(['success'=>'Data berhasil diedit']);
    }

    public function destroy(string $id):RedirectResponse
    {
        $destinations = Destinations::findOrFail($id);
        
        $destinations->delete();
        session()->flash("pesan", "Data berhasil dihapus");
        return redirect()->route('destinations.index')->with(['success'=>'Data berhasil dihapus']);
    }
}
