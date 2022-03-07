@extends('includes.main')

@section('content')

<table>
   <tr>
   <th>Player ID</th>
      <th>Username</th>
      <th>Total Points</th>
      <th>Games Played</th>
  
      <th>Average Score</th>
   </tr>
@foreach($data as $d)
<tr>   
<td><input type = "text" disabled = "true" value = "{{ $d->player_id }}"></td>

   <td><input type = "text" disabled = "true" value = "{{ $d->username }}"></td>
   <td><input type = "text" disabled = "true" value = "{{$d->total_points}}"></td>

   <td><input type = "text" disabled = "true" value = "{{$d->played}}"></td>

   <td><input type = "text" disabled = "true" value = "{{ $d->avg_score }}"></td>
</tr>

@endforeach
</table>
@endsection