@extends('layouts.app')

@section ('content')
<div class="container">
<div class="card">
        <h3>{{$student->user->name}}</h3>
        <h3>{{$student->user->email}}</h3>
        <h3>{{$student->class}}</h3>
        <h3>{{$student->subject}}</h3>
        <h3>{{$student->faculty}}</h3>
        <h3>{{$student->dob}}</h3>
        <h3>{{$student->phone}}</h3>
</div>
</div>
@endsection