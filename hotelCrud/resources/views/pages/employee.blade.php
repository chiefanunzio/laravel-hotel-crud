@extends('layouts.main-layout')
@section('content')
<h1> employee</h1>

<div>
    <ul>
        <li><h2>Nome:{{$employee->firstname}}</h2></li>
        <li><h2>Cognome:{{$employee->lastname}}</h2></li>
        <li><h4>Role:{{$employee->role}} </h4></li>
        <li>Ral:{{$employee->ral}}<h5></h5></li>
    </ul>   
</div>            
<span><a class="button" href="{{route('home')}}">torna alla homepage</a></span>   
    
@endsection           