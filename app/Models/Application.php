<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
     //The table associated with the model
    protected $table = 'applications';

     //The primary key associated with the table
  protected $primaryKey = 'id';

    //This array defines which columns can be filled using methods
   protected $fillable = [
    // Details of the applicant
        'job_id',
        'full_name',
        'email',
        'cv',

    ];

}
