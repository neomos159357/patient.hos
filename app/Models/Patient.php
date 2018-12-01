<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $table ='patient';
    protected $fillable = [
        'patient_id',
        'Name',
        'Surname',
        'Age',
        'Blood_Group',
        'Gender',
        'General_Practice',
        'bath30_flag',
        'created_at',
        'updated_at'

    ];

    public function transactions(){
        return $this->hasMany('App\Models\Transaction','patient','patient_id');
    }
    


}
