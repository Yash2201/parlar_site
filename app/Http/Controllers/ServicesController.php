<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = services::all();
        return view('services.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'photos' => ['required']
        ]);

        
        $services = new services();
        $services->name = $request->name;
        $services->description = $request->description;

        if($request->photos){
            $file = $request->file('photos');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public');
            $services->photos = $filename;
        }

        $services->save();

        return redirect()->route('services.services_list')->with('success', 'Services created successfully');
    }

    public function edit($id)
    {
        try {
            $services = services::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            // Handle the case where the record is not found, e.g., redirect to the index page with a message.
            return redirect()->route('services.index')->with('error', 'Services not found');
        }
        return view('services.edit', compact('services'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        $services = services::find($id);
        $services->name = $request->name;
        $services->description = $request->description;

        if($request->photos){
            $file = $request->file('photos');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public');
            $services->photos = $filename;
        }

        $services->save();

        return redirect()->route('services.services_list')->with('success', 'Services updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the testimonial by ID and delete it
        services::destroy($id);
        return redirect()->route('services.testimonials_list')->with('success', 'Services deleted successfully');
    }
}
