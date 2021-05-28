@extends('layouts.main-layout')
@section('content')
<h1> EMPLOYEE</h1>


<div>
    <ul>   
        <li><h2>Nome:  {{$employee->firstname}}</h2></li>
        <li><h2>Cognome:  {{$employee->lastname}}</h2></li>   
        <li><h4>Role:  {{$employee->role}} </h4></li>
        <li>Ral:  {{$employee->ral}}<h5></h5></li>
    </ul>   
</div>               
<a href="{{route('delete', $employee ->id)}}">delete employee</a>
    
<a href="{{route('edit', $employee ->id)}}">update employee</a>   
    
@endsection                       