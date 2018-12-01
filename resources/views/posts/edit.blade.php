@extends('layouts.app')

@section('content')
    <h1>Edit Patient</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->patient_id], 'method' => 'PUT']) !!}
<div class="form-group">
    {{Form::label('patient_id','ID')}}
    {{Form::text('patient_id', $post->patient_id ,['class' => 'form-control', 'placeholder' => 'ID'])}}
</div>   
<div class="form-group">
        {{Form::label('Name','Name')}}
        {{Form::text('Name', $post->Name ,['class' => 'form-control', 'placeholder' => 'Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('Surname','Surname')}}
        {{Form::text('Surname', $post->Surname ,['class' => 'form-control', 'placeholder' => 'Surname'])}}
    </div>

    <div class="form-group">
        {{Form::label('Age','Age')}}
        {{Form::text('Age', $post->Age ,['class' => 'form-control', 'placeholder' => 'Age'])}}
    </div>

    <div class="form-group">
        {{Form::label('Blood_Group','BloodGroup')}}
        {{Form::text('Blood_Group', $post->Blood_Group ,['class' => 'form-control', 'placeholder' => 'BloodGroup'])}}
    </div>

    <div class="form-group">
        {{Form::label('Gender','Gender')}}
        {{Form::text('Gender', $post->Gender ,['class' => 'form-control', 'placeholder' => 'Gender'])}}
    </div>

    <div class="form-group">
        {{Form::label('General_Practice','General Practice')}}
        {{Form::text('General_Practice', $post->General_Practice ,['class' => 'form-control', 'placeholder' => 'General Practice'])}}
    </div>

    <div class="form-group">
        {{Form::label('bath30_flag','30 Baht')}}
        {{Form::text('bath30_flag', $post->bath30_flag ,['class' => 'form-control', 'placeholder' => '30 Baht'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection

