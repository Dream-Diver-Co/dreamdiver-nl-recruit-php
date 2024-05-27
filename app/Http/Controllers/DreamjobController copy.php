<?php

namespace App\Http\Controllers;

use App\Models\dreamjob;
use Illuminate\Http\Request;

class DreamjobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dreamjobs = Dreamjob::all();
        return view('recruitment.Dream_jobs.index', compact('dreamjobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recruitment.Dream_jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
            'phone' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'file|mimes:pdf,doc,docx|max:2048',
            'date' => 'required|date',
            'note' => 'nullable',
        ]);

        $dreamjob = new Dreamjob($request->all());

        if ($request->hasFile('image')) {
            $dreamjob->image = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('file')) {
            $dreamjob->file = $request->file('file')->store('files', 'public');
        }

        $dreamjob->save();

        return redirect()->route('recruitment.Dream_jobs.index')
                         ->with('success', 'Dreamjob created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(dreamjob $dreamjob)
    {
        // return view('recruitment.Dream_jobs.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dreamjob $dreamjob)
    {
         return view('recruitment.Dream_jobs.edit', compact('dreamjob'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dreamjob $dreamjob)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:dreamjobs,email,' . $dreamjob->id,
            'phone' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'file|mimes:pdf,doc,docx|max:2048',
            'date' => 'required|date',
            'note' => 'nullable',
        ]);

        $dreamjob->fill($request->all());

        if ($request->hasFile('image')) {
            $dreamjob->image = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('file')) {
            $dreamjob->file = $request->file('file')->store('files', 'public');
        }

        $dreamjob->save();

        return redirect()->route('recruitment.Dream_jobs.index')
                         ->with('success', 'Dreamjob updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dreamjob $dreamjob)
    {
        $dreamjob->delete();
        return redirect()->route('Dreamjob.index')
                         ->with('success', 'Dreamjob deleted successfully.');
    }
}
