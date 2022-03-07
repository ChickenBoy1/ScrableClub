@extends('includes.main')

@section('content')

<form>
   <label for = "wins">Wins</label>
   <input id = "wins" type = "text" disabled = "true" value = "{{ $o['wins'] }}"><br>

   <label for = "losses">Losses:</label>
   <input id = "losses" type = "text" disabled = "true" value = "{{$o['losses']}}"><br>

   <label for = "draws">Draws:</label>
   <input id = "draws" type = "text" disabled = "true" value = "{{$o['draws']}}"><br>

   <label for = "total_points">Total Points:</label>
   <input id = "total_points" type = "text" disabled = "true" value = "{{$o['total']}}"><br>

   <label for = "played">Played:</label>
   <input id = "played" type = "text" disabled = "true" value = "{{ $o['played'] }}"><br>

   <label for = "score">Average Score:</label>
   <input id = "score" type = "text" disabled = "true" value = "{{ $o['avg_score'] }}"><br>
   
   <label for = "highscore">HighScore:</label>
   <input id = "highscore" type = "text" disabled = "true" value = "{{$o['highscore']}}"><br>
   
   <label for = "location">Location:</label>
   <input id = "location" type = "text" disabled = "true" value = "{{$o['location']}}"><br>

   <label for = "time">Time:</label>
   <input id = "time" type = "text" disabled = "true" value = "{{ $o['time'] }}"><br>

   <label for = "op_name">Opponents Name:</label>
   <input id = "op_name" type = "text" disabled = "true" value = "{{ $o['op_name'] }}">
</form>
@endsection