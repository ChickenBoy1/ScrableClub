@extends('includes.main')

@section('content')

@foreach($users as $u)
   {{ $u->name }}
@endforeach

@endsection