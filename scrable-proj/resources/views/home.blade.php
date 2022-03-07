@extends('includes.main')

@section('content')
<b>At Start Please Run These Routes<br>
    /insertPlayers<br>
    /insertGames
</b>
<hr>
Adding New Records:<br>
    /newPlayer<br>
    /newGame<br><br>
    NOTE: Add A Player Before "Finishing"(Inserting Game Record) With Them
<hr>
To View A Players Profile:<br>
    /playersProfile/player_id <br><br>
    E.g. /playersProfile/2
<hr>
Edit Players Details:<br>
    /editPlayersDetails/player_id <br><br>
    E.g. /editPlayerDetails/8
    <hr>
To View The Leaderboard Based On Spec Conditions:<br>
    /leaderboard

    @endsection
