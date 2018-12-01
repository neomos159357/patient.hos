<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    // Table Name
    protected $table = 'patient';

    //Primary Key
    public $primaryKey = 'patient_id';

    //Timestamps
    public $timestamps = true;
}
