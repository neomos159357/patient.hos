@extends('layouts.app')

@section('content')
    <h1>Patient</h1>
    @if (count($posts) > 1)
        @foreach ($posts as $post)
            <div class = "well">
                    <h3><a href="../posts/{{$post->patient_id}}">{{$post->patient_id}} - {{$post->Name}}  {{$post->Surname}}</h3>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Patient</p>
        
    @endif

    
@endsection