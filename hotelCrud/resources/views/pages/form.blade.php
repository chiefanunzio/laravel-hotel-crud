@extends('layouts.main-layout')
@section('content')
<h1>ADD EMPLOYEE</h1>   
   
<form method="POST" action="{{route('add-db')}}">

    @csrf
    @method('POST')

    <input type="text" placeholder="inserisci il tuo nome" name="firstname" id="name">
    <input type="text" placeholder="inserisci il tuo cognome" name="lastname" id="lastname">
    <input type="text" placeholder="inserisci il tuo ruolo" name="role" id="role">
    <input type="text" placeholder="inserisci la tua ral" name="ral" id="ral">
    <input type="submit" value="aggiungi nuovo dipendente">
</form>      
   
@endsection      