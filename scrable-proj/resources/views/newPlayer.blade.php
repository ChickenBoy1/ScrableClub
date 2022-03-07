@extends('includes.main')

@section('content')

@if(session()->has('success'))
    {{session()->get('success')}}
@endif

@if($errors->any())

<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif

<form id = "new-player-form" method = "GET" action ="{{route('insertNewPlayer')}}">
    @csrf
    <label for = "uname">Username</label>
    <input type = "text" id="uname" name = "uname"><br>
    <label for = "email">E-mail</label>
    <input type = "email" id="email" name = "email"><br>
    <label for = "tele">Telephone</label>
    <input type = "tel" maxlength = "11" id="tele" name = "tele"><br>
    <input type = "submit" id="submit" name = "submit">

</form>
@endsection