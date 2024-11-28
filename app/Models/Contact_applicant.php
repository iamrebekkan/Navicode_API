<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_applicant extends Model
{
     //The table associated with the model
    protected $table = 'Contact_applicants';

    //The primary key associated with the table
  protected $primaryKey = 'id';

    //Array defines which columns can be filled using methods
   protected $fillable = [
    // Details of the applicant
        'full_name',
        'email',
        'phone_number',
        'message',
    ];

}

