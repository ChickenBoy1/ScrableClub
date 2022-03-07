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

<form id = "new-game-form" method = "GET" action ="{{route('insertNewGame')}}">
    @csrf
    <input type = "number" id="player1" placeholder = "Player 1" name = "player1">
    <input type = "number" id="player2" placeholder = "Player 2" name = "player2"><br><br>
    <input type = "number" id="p1_score" placeholder = "P1 Score" name = "p1_score">
    <input type = "number" id="p2_score" placeholder = "P2 Score" name = "p2_score"><br><br>
    <input type = "text" id="location" placeholder = "Location" name = "location"><br>

    <input type = "submit" id="submit" name = "submit">

</form>