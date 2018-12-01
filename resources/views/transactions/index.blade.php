
@extends('layouts.app')
@section('content')
<h1>transactions</h1>

@if (count($transactions) > 1)
    @foreach ($transactions as $transaction)
            <div class = "well">
                <h3><a href="transactions/{{$transaction->id}}">{{$transaction->patient}} - {{$transaction->ownPatient->Name}}  {{$transaction->ownPatient->Surname}}</h3>
            </div> 
    @endforeach
    {{$transactions->links()}}
@else
    <p>No transaction</p>
    
@endif


@endsection