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


@foreach($data as $d)

<form method = "GET" action ="{{route('updatePlayerDetails')}}">
<label for = "id">Player ID:</label>
<input id = "id" name = "id" type = "text" readonly value = "{{ $d->player_id }}"><br>

<label for = "uname">Username:</label>
<input id = "uname" name = "uname" type = "text" value = "{{$d->username}}"><br>

<label for = "email">E-mail:</label>
<input id = "email" name = "email" type = "email" value = "{{$d->email}}"><br>

<label for = "tele">Telephone:</label>
<input id = "tele" maxlength = "11" name = "tele" type = "tel" value = "{{$d->telephone}}"><br>

<input type = "submit" value = "Update">
</form>

@endforeach
@endsection