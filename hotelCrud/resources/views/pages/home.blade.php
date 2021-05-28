@extends('layouts.main-layout')
@section('content')
       

<h1>EMPLOYEE</h1>
<a class="button" href="{{route('form')}}">new employee</a>     
<div>   
    
    <ul>
        @foreach ($employees as $employee)
        <li>
            <span>{{$employee->firstname}} --> {{$employee->lastname}}</span>
            <a href="{{route('employee', $employee ->id)}}">modifica</a>
            
        </li>   
        @endforeach
    </ul>                
@endsection                