@extends('layouts.main-layout')
@section('content')
<h1>UPDATE EMPLOYEE</h1>   
   
<form method="POST" action="{{route('update', $employee ->id)}}">

    @csrf
    @method('POST')

    <input type="text" placeholder="modifica il  nome" name="firstname" value="{{$employee ->firstname }}" id="firstname">
    <input type="text" placeholder="modifica il  cognome" name="lastname" value="{{$employee ->lastname }}" id="lastname">
    <input type="text" placeholder="modifica il  ruolo" name="role" value="{{$employee ->role }}" id="role">
    <input type="text" placeholder="inserisci la nuova ral" name="ral" value="{{$employee ->ral }}" id="ral">
    <input type="submit" value="accetta modifiche">
</form>         
   
         
@endsection   