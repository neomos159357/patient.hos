@extends('layouts.app')

@section('content')
    <h1>{{$patient->Name}} {{$patient->Surname}}</h1>
    @foreach ($patient->transactions as $transaction)
        <p>ID : {{ $transaction->patient }}</p>
        <p>ห้องผ่าตัด : {{ $transaction->oroom }}</p>
        <p>ผู้ผ่าตัด : {{ $transaction->Surgeon }}</p>
        <p>ผู้ดมยา : {{ $transaction->Anesthetist }}</p>
        <p>พยาบาลผู้ช่วย : {{ $transaction->ONurse }}</p>
        <p>ห้องพัก : {{ $transaction->RestRoom }}</p>
        <p>พยาบาลเฝ้าไข้ : {{ $transaction->RNurse }}</p>
        <p>จำนวนวัน : {{ $transaction->nod }}</p>
        <p>ราคาต่อวัน : {{ $transaction->cpd }}</p>
        <p>ส่วนเกิน : {{ $transaction->exc }}</p>
        <p>รวม : {{ $transaction->sumcost }}</p>
    @endforeach

@endsection
        

