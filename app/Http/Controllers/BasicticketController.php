<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basicticket;
use App\Models\Basicattachment;


class BasicticketController extends Controller
{
    public function index(){
        $contacts = Basicticket::all();
        return view('basicticket.index', compact('contacts'));
    }


    public function create()
    {
        return view('basicticket.create');
    }


    public function store(Request $request)
{
    // Validation rules
    $rules = [
        'user-name' => 'required|string|max:255',
        'user-email' => 'required|email|max:255',
        'user-phone' => 'required|string|max:20',
        // 'message' => 'required|string',
        'user-note' => 'string|nullable',
         'user-g-recaptcha-response' => 'required|captcha',
    ];

    // Validate the request data
    $validatedData = $request->validate($rules);

    // If validation passes, create a new Contact instance
    $basicticket = new Basicticket();

    // Assign validated data to the Contact instance
    $basicticket->name = $validatedData['user-name'];
    $basicticket->email = $validatedData['user-email'];
    $basicticket->phone = $validatedData['user-phone'];
    // $contact_message->message = $validatedData['message'];
    $basicticket->note = $validatedData['user-note'];

    // Save the contact message to the database
    $basicticket->save();

    $files = $request->file('files');

    if ($files) {
        foreach ($files as $file) {

            //$image = $request->file('image');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;

            $basic_attachment = new Basicattachment();
            $basic_attachment->basicticket_id = $basicticket->id;
            $basic_attachment->attachment_name = $file->storeAs('basic_attachments_folder', $filename);
            $basic_attachment->save();
        }
    }


    // Redirect back with a success message
    return redirect()->back()->with('success', 'Thanks for you Ticket. We will contact with you soon!');

}




    public function edit($id)
    {
        $home_service = Homeservice::where('id', $id)->first();

        return view('home_services.edit', compact('home_service'));


        // $ticket_history = Tickethistory::where('ticket_id', $ticket->id)->get();
        // $attachments = Attachment::where('ticket_id', $ticket->id)->get();
        // return view('tickets.edit', compact('ticket', 'ticket_history','attachments'));


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
