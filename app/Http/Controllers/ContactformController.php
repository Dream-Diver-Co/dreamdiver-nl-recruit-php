<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactformController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }


    public function create()
    {
        return view('contact.create');
    }


    public function store(Request $request)

{
    //dd($request->all());
    // Validation rules
    $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        // 'message' => 'required|string',
        'note' => 'string|nullable',
        //'g-recaptcha-response' => 'required|captcha',
    ];

        // Validate the request data
        $validatedData = $request->validate($rules);

        //dd($validatedData);

        // If validation passes, create a new Contact instance
        $contact_message = new Contact();


    // Assign validated data to the Contact instance
    $contact_message->name = $validatedData['name'];
    $contact_message->email = $validatedData['email'];
    $contact_message->phone = $validatedData['phone'];
    // $contact_message->message = $validatedData['message'];
    $contact_message->note = $validatedData['note'];


        // Save the contact message to the database
        $contact_message->save();



        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thanks for you message. We will contact with you soon!');
        //return redirect()->route('contact')->with('success', 'Thanks for you message. We will contact with you soon!');


    }


//     public function store(Request $request)
// {
//     // Create a new Contact instance
//     $contact_message = new Contact();

//     // Assign data directly from the request to the Contact instance
//     $contact_message->name = $request->input('name');
//     $contact_message->email = $request->input('email');
//     $contact_message->phone = $request->input('phone');
//     $contact_message->message = $request->input('message');
//     $contact_message->note = $request->input('note');

//     // Save the Contact instance to the database
//     $contact_message->save();

//     return redirect()->back()->with('success', 'Thanks for your message. We will contact you soon!');
// }




    public function edit($id)
    {
        $home_service = Homeservice::where('id', $id)->first();

        return view('home_services.edit', compact('home_service'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        // Find the existing record by ID
        $home_service = Homeservice::findOrFail($id);

        $filename_path = $home_service->service_image;

        // Check if a new service image is provided
        if (isset($data['service_image']) && $data['service_image']) {
            $file = $data['service_image'];

            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;
            $filename_path = request()->file('service_image')->storeAs('services_image', $filename);
        }

        // Update the attributes
        $home_service->service_title = $data['service_title'];
        $home_service->service_image = $filename_path;
        $home_service->status = $data['status'];

        // Save the changes
        $home_service->save();

        return redirect()->back()->with('success', 'Home service updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the HomeService record by ID
        $homeService = HomeService::find($id);

        // Check if the record exists
        if (!$homeService) {
            return redirect()->route('home_service_index')->with('error', 'Record not found');
        }

        // Perform the deletion
        $homeService->delete();

        // Redirect with a success message
        return redirect()->route('home_service_index')->with('success', 'Record deleted successfully');
    }
}
