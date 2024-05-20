<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Attachment;
use App\Models\Tickethistory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function myticket()
    {
        $ticket_creator_id = auth()->user()->id; // Use auth() instead of auth->
        $my_tickets = Ticket::where('ticket_creator_id', $ticket_creator_id)->get();

        return view('tickets.myticket', compact('my_tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validation rules
    $rules = [
        'ticket_creator_id' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'issue' => 'required',
        'status' => 'required',
        'files.*' => 'mimes:jpeg,png,pdf|max:2048', // Adjust file type and size as needed
        //'g-recaptcha-response' => 'required|captcha',
    ];

    // Custom validation messages
    $messages = [
        'files.*.mimes' => 'The file must be a valid image (jpeg, png) or PDF.',
        'files.*.max' => 'The file size must not exceed 2MB.',
    ];

    // Validate the request
    $validator = Validator::make($request->all(), $rules, $messages);

    // Check if validation fails
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }


        $data = $request->all();

        //dd($data);

        $ticket = new Ticket();

        $ticket->ticket_creator_id = $data['ticket_creator_id'];
        $ticket->email = $data['email'];
        $ticket->phone = $data['phone'];
        $ticket->issue = $data['issue'];
        $ticket->status = $data['status'];
        $ticket->save();

        //attachment save

        $files = $request->file('files');

        if ($files) {
            foreach ($files as $file) {

                //$image = $request->file('image');
                $name = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();

                $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;

                $attachment = new Attachment();
                $attachment->ticket_id = $ticket->id;
                $attachment->attachment_name = $file->storeAs('attachments_folder', $filename);
                $attachment->save();
            }
        }

        Alert::success('Success', 'Ticket created successfully!');

        return redirect()->route('myticket')->with('success', 'Ticket created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        $ticket_history = Tickethistory::where('ticket_id', $ticket->id)->get();
        $attachments = Attachment::where('ticket_id', $ticket->id)->get();
        return view('tickets.edit', compact('ticket', 'ticket_history','attachments'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $data = $request->all();

        $ticket->email = $data['email'];
        $ticket->phone = $data['phone'];
        $ticket->issue = $data['issue'];
        $ticket->status = $data['status'];
        $ticket->save();

        Alert::success('Ticket Updated', 'Ticket created successfully!');


        return redirect()->back()->with('success', 'Ticket Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->attachments()->delete();
        $ticket->delete();

        // You can add a redirect or any other logic after the deletion.
        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully');
    }
}
