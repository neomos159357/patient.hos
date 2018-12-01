<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table ='transaction';
    protected $fillable = [
        'id',
        'patient',
        'oroom',
        'Surgeon',
        'Anesthetist',
        'ONurse',
        'RestRoom',
        'RNurse',
        'nod',
        'cpd',
        'exc',
        'sumcost'

    ];

    public function ownPatient(){
        return $this->hasOne('App\Models\Patient','patient_id','patient');
    }

    public function ownSurgeon(){
        return $this->hasOne('App\Models\Staff','staff_id','Surgeon');
    }

    public function ownAnesthetist(){
        return $this->hasOne('App\Models\Staff','staff_id','Anesthetist');
    }

    public function ownONurse(){
        return $this->hasOne('App\Models\Staff','staff_id','ONurse');
    }

    public function ownRNurse(){
        return $this->hasOne('App\Models\Staff','staff_id','RNurse');
    }

    


}
