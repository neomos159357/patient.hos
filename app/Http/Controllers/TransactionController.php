<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('patient','asc')->paginate(25);

        return view('transactions.index')->with('transactions', $transactions);
    }

    public function getTransaction($transaction_id)
    {
        $transaction = Transaction::where('id',$transaction_id)->first();

        return view('transactions.detail')->with('transaction', $transaction);
    }
}
