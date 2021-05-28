@extends('layouts.main-layout')
@section('content')
       
<body>
    
    <h2>EMPLOYEES</h2>
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
    
</body>
@endsection                