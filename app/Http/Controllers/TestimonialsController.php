<?php

namespace App\Http\Controllers;

use App\Models\testimonials;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = testimonials::all();
        return view('testimonials.list', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'feedback' => ['required', 'string', 'max:255'],
            'rating' => ['required', 'string', 'max:255'],
            'photos_or_video' => ['required']
        ]);

        
        $testimonials = new testimonials();
        $testimonials->feedback = $request->feedback;
        $testimonials->name = $request->name;

        if($request->photos_or_video){
            $file = $request->file('photos_or_video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public');
            $testimonials->photos_or_video = $filename;
        }

        $testimonials->rating = $request->rating;
        $testimonials->save();

        return redirect()->route('testimonials.testimonials_list')->with('success', 'Testimonial created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $testimonials = testimonials::all();
        $services = services::all();
        return view('parlor_layout.master', compact('testimonials','services'));
    }

    public function edit($id)
    {
        try {
            $testimonials = testimonials::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            // Handle the case where the record is not found, e.g., redirect to the index page with a message.
            return redirect()->route('testimonials.index')->with('error', 'Testimonial not found');
        }
        return view('testimonials.edit', compact('testimonials'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'feedback' => 'required|string',
            'name' => 'required|string',
            'rating' => 'required|string',
        ]);

        $testimonials = testimonials::find($id);
        $testimonials->feedback = $request->feedback;
        $testimonials->name = $request->name;
        
        if($request->photos_or_video){
            $file = $request->file('photos_or_video');
            $filename = time() . '_' . $file->getClientOriginalName();
            // $file->storeAs('uploads', $filename);
            $file->storeAs('uploads', $filename, 'public');
            $testimonials->photos_or_video = $filename;
        }

        $testimonials->rating = $request->rating;
        $testimonials->save();

        return redirect()->route('testimonials.testimonials_list')->with('success', 'Testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the testimonial by ID and delete it
        testimonials::destroy($id);
        return redirect()->route('testimonials.testimonials_list')->with('success', 'Testimonial deleted successfully');
    }
}
