<?php

namespace App\Http\Controllers;

use App\Models\Contact_applicant;
use Illuminate\Http\Request;


class Contact_applicantController extends Controller
{
    protected $contact_applicant;

        // Constructor to create a new Contact_application instance
      public function __construct(){
        $this->contact_applicant = new Contact_applicant();
    }
        /**
         * Display a listing of the resource.
         * Retrieves all applications from the database
         */
    public function index()
    {
        // Return all application records
        return $this->contact_applicant->all();
    }


        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'required|string|max:15',
                'message' => 'required|string|max:1000',
            ]);

            $contact = $this->contact_applicant->create($validatedData);

            return response()->json(['message' => 'Message sent successfully', 'data' => $contact], 201);
        }

    // Retrieves a specific application by ID
public function show($id)
{
    // Find the application by id
    $contact_applicant = $this->contact_applicant->find($id);

    // Return an error message if the application is not found
    if (!$contact_applicant) {
        return response()->json(['message' => 'Application not found'], 404);
    }

    // Return the found application with a success message
    return response()->json([
        'message' => 'Application retrieved successfully',
        'data' => $contact_applicant], 200);
}

        // Update the specified resource in storage by ID
    public function update(Request $request, $id)
    {
         // Find the application by id
        $contact_applicant = Contact_applicant::find($id);

        // Return the application or error if not found
        if (!$contact_applicant) {
            return response()->json(['message' => 'Application not found'], 404);
        }
        // Update the application with request data
        $contact_applicant->update($request->all());

        return response()->json(['message' => 'Updated successfully']);
    }

}

