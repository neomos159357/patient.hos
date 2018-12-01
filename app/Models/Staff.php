<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table ='staff';
    protected $fillable = [
        'staff_id',
        'Name',
        'Surname',
        'Type',
        'Start_Contact',
        'password',
        'username',
        'status'
    ];
    public function surgeonTransactions(){
        return $this->hasMany('App\Models\Transaction','Surgeon','staff_id');
    }

    public function anesthetistTransactions(){
        return $this->hasMany()('App\Models\Transaction','Anesthetist','staff_id');
    }

    public function oNurseTransactions(){
        return $this->hasMany('App\Models\Transaction','ONurse','staff_id');
    }

    public function rNurseTransactions(){
        return $this->hasMany()('App\Models\Transaction','RNurse','staff_id');
    }

}