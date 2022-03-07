@extends('includes.main')

@section('content')

@foreach($users as $u)
   {{ $u->username }}
   {{ $u->email }}
   {{ $u->telephone }}
@endforeach

@endsection