<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    // Initialize the Application model
    protected $application;

    // Constructor to create a new Application instance.
    public function __construct()
    {
        $this->application = new Application();
    }

     //Retrieves all applications from the database.
    public function index()
    {
        // Return all application records.
        return $this->application->all();
    }
     //Create a new application using the request data.
    public function store(Request $request)
    {
        // Validate the request data.
        $validatedData = $request->validate([
            'job_id' => 'required|integer',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:applications,email',
            'district' => 'required',
            'education_status' =>  'required',
            'cv' => 'required|file|mimes:pdf',
        ]);

        // Create a new application with validated data.
        return $this->application->create($validatedData);
    }
     // Retrieves an application by ID.
    public function show($id)
    {
        // Find the application by ID or return error
        $application = $this->application->find($id);

        if (!$application) {
            return response()->json(['message' => 'Application not found'], 404);}

        return $application;
    }

}
