@extends('layouts.app')

@section('content')
    <h1>{{$transaction->ownPatient->Name}} {{$transaction->ownPatient->Surname}}</h1>
        <p>ID : {{ $transaction->ownPatient->patient_id }}</p>
        <p>ห้องผ่าตัด : {{ $transaction->oroom }}</p>
        <p>ผู้ผ่าตัด : {{ $transaction->ownSurgeon->Name }}  {{ $transaction->ownSurgeon->Surname }}</p>
        <p>ผู้รมยา : {{ $transaction->ownAnesthetist->Name }}  {{ $transaction->ownAnesthetist->Surname }}</p>
        <p>พยาบาลผู้ช่วย : {{ $transaction->ownONurse->Name }}  {{ $transaction->ownONurse->Surname }}</p>
        <p>ห้องพัก : {{ $transaction->RestRoom }}</p>
        <p>พยาบาลเฝ้าไข้ : {{ $transaction->ownRNurse->Name }}  {{ $transaction->ownRNurse->Surname }}</p>
        <p>จำนวนวัน : {{ $transaction->nod }}</p>
        <p>ราคาต่อวัน : {{ $transaction->cpd }}</p>
        <p>ส่วนเกิน : {{ $transaction->exc }}</p>
        <p>รวม : {{ $transaction->sumcost }}</p>

@endsection
        

