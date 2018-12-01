@extends('layouts.app')

@section('content')
    <a href="../posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->patient_id}}</h1>

    <h2>ชื่อ  {{$post->Name}}</h2>
    <h2>สกุล  {{$post->Surname}}</h2>
    <h2>อายุ  {{$post->Age}}</h2>
    <h2>กรุ๊ปเลือก  {{$post->Blood_Group}}</h2>
    <h2>เพศ  {{$post->Gender}}</h2>
    <h2>แพทย์ประจำตัว  {{$post->General_Practice}}</h2>
    <h2>สิทธิ์ 30 บาท  {{$post->bath30_flag}}</h2>

    <a href="/posts/{{$post->patient_id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete' ,['class' => 'btn btn-danger'] )}}
    {!!Form::close()!!}
    
@endsection