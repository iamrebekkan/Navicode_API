<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Contact_applicantController;

 // Define the API routes for the Application resource.


//Careers page's application form

    // Route to retrieve all applications
Route::get('/application', [ApplicationController::class,'index']);

 //Create a new application using the request data.
 Route::post('/application', [ApplicationController::class,'store']);

    //Retrieve the application by ID
Route::get('/application/{id}', [ApplicationController::class,'show']);






//contact details

   // Route to retrieve all applications
   Route::get('/contact_applicants', [Contact_applicantController::class,'index']);

   //Create a new application using the request data.
Route::post('/contact_applicants', [Contact_applicantController::class,'store']);

   //Retrieve the application by ID
Route::get('/contact_applicants/{id}', [Contact_applicantController::class,'show']);

   //Update by id
Route::put('/contact_applicants/{id}', [Contact_applicantController::class,'update']);




