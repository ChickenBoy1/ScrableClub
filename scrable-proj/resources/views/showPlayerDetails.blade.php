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
<input id = "id" name = "id" type = "text" readonly value = "{{ $d->player_id }}">
<input id = "uname" name = "uname" type = "text" value = "{{$d->username}}">
<input id = "email" name = "email" type = "email" value = "{{$d->email}}">
<input id = "tele" maxlength = "11" name = "tele" type = "tel" value = "{{$d->telephone}}">

<input type = "submit" value = "Update">
</form>

@endforeach
@endsection