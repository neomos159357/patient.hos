<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Transaction;

class PatientController extends Controller
{
    //
    public function getTransactions($transaction_id){
        $transaction = Transaction::where('id',$transaction_id)->first();
        //return response()->json($transactions->transactions);
        return view('pages.index', ['patient' => $transaction]);
    }

    public function deletePatient($patient_id){
        $patient = Patient::where('patient_id',$patient_id)->delete();;

        return redirect('/posts')->with('Success', 'Patient Deleted');
    }

    public function getPatients(){

        $patients = Patient::orderBy('patient_id','asc')->paginate(25);
        // return response()->json($patients);
        return view('patients.index')->with('patients', $patients);
    }
}
