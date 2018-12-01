
@extends('layouts.app')
@section('content')
<h1>Patients</h1>

@if (count($patients) > 1)
    @foreach ($patients as $patient)
            <div class = "well">
                    <h3><a href="../patient/{{$patient->patient_id}}">{{$patient->patient_id}} - {{$patient->Name}}  {{$patient->Surname}}</h3>
            </div> 
    @endforeach
    {{$patients->links()}}
@else
    <p>No Patient</p>
    
@endif


@endsection