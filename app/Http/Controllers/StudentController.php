<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
// use App\Mail\StudentNotification;
use App\Mail\PostedjobNotification;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view ('Posted_Jobs.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Posted_Jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'address' => 'required|string|max:255',
        //     'mobile' => 'required|string|max:15',
        //     'email' => 'nullable|email|max:255',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'date' => 'nullable|date',
        //     'file' => 'nullable|mimes:pdf,doc,docx|max:2048',
        //     'link' => 'nullable|url|max:255',
        //     'note' => 'nullable|string|max:65535',
        // ]);

        // // Handle file uploads
        // if ($request->hasFile('image')) {
        //     $validatedData['image'] = $request->file('image')->store('images', 'public');
        // }

        // if ($request->hasFile('file')) {
        //     $validatedData['file'] = $request->file('file')->store('files', 'public');
        // }

        // Student::create($validatedData);

        // return redirect('student')->with('flash_message', 'Student added!');
        // $input = $request->all();
        // Student::create($input);
        // session()->flash('success_message', 'Student added successfully!');
        // return redirect()->back();

        $input = $request->all();

        if ($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('file')) {
            $input['file'] = $request->file('file')->store('files', 'public');
        }

        // Student::create($input);
        $student = Student::create($input);

         // Send notification email
         Mail::to('dreamdiver2017@gmail.com')->send(new PostedjobNotification($student));

        //  dd('send');
        return redirect()->back()->with('success_message', 'Dream Job added successfully!');

        // $input = $request->all();
        // Student::create($input);
        // return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $student = Student::find($id);

        // if (!$student) {
        //     return redirect('student')->with('error_message', 'Student not found!');
        // }

        // return view('students.show')->with('students', $student);

        $student = Student::find($id);
        return view('Posted_Jobs.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $student = Student::find($id);

        // if (!$student) {
        //     return redirect('student')->with('error_message', 'Student not found!');
        // }

        // return view('students.edit')->with('students', $student);

        $student = Student::find($id);
        return view('Posted_Jobs.edit')->with('students', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'address' => 'required|string|max:255',
        //     'mobile' => 'required|string|max:15',
        //     'email' => 'nullable|email|max:255',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'date' => 'nullable|date',
        //     'file' => 'nullable|mimes:pdf,doc,docx|max:2048',
        //     'link' => 'nullable|url|max:255',
        //     'note' => 'nullable|string|max:65535',
        // ]);

        // $student = Student::find($id);

        // if (!$student) {
        //     return redirect('student')->with('error_message', 'Student not found!');
        // }

        // // Handle file uploads
        // if ($request->hasFile('image')) {
        //     $validatedData['image'] = $request->file('image')->store('images', 'public');
        // }

        // if ($request->hasFile('file')) {
        //     $validatedData['file'] = $request->file('file')->store('files', 'public');
        // }

        // $student->update($validatedData);

        // return redirect('student')->with('flash_message', 'Student updated!');

        // Student::create($input);
        // session()->flash('success_message', 'Student added successfully!');
        // return redirect()->back();

        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('postedjob')->with('flash_message', 'Dream Job Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $student = Student::find($id);

        if (!$student) {
            return redirect('postedjob')->with('error_message', 'Dream Job not found!');
        }

        $student->delete();

        return redirect('postedjob')->with('flash_message', 'Dream Job deleted!');


        // Student::destroy($id);
        // return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
