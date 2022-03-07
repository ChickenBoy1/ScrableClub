<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class GameController extends Controller
{

    public function clearGames(){

        DB::table('games')->truncate();
    }
    public function insertGames(){

        DB::table('games')->truncate();
        DB::table('games')->insert([
            //between players 1  and 2 (12 games)
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 2, 'player_2' => 1, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],

            //players 3 and 4
            ['player_1' => 3, 'player_2' => 4, 'p1_score' => 200, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 4, 'player_2' => 3, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],

            //players 5 and 6
            ['player_1' => 5, 'player_2' => 6, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 5, 'player_2' => 6, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 5, 'player_2' => 6, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 6, 'player_2' => 5, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 6, 'player_2' => 5, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 6, 'player_2' => 5, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 6, 'player_2' => 5, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 6, 'player_2' => 5, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 6, 'player_2' => 5, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 6, 'player_2' => 5, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 6, 'player_2' => 5, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 6, 'player_2' => 5, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],

            //between 7 and 8
            ['player_1' => 7, 'player_2' => 8, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 7, 'player_2' => 8, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 7, 'player_2' => 8, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 7, 'player_2' => 8, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 7, 'player_2' => 8, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 7, 'player_2' => 8, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 8, 'player_2' => 7, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 8, 'player_2' => 7, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 8, 'player_2' => 7, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 8, 'player_2' => 7, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 8, 'player_2' => 7, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 8, 'player_2' => 7, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],

            //between 9 and 10
            ['player_1' => 9, 'player_2' => 10, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 9, 'player_2' => 10, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 9, 'player_2' => 10, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 9, 'player_2' => 10, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 10, 'player_2' => 9, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 10, 'player_2' => 9, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 9, 'player_2' => 10, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 10, 'player_2' => 9, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 10, 'player_2' => 9, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 10, 'player_2' => 9, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 10, 'player_2' => 9, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 10, 'player_2' => 9, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],

            //between 11 and 12 (only 8 games)
            ['player_1' => 11, 'player_2' => 12, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 11, 'player_2' => 12, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 12, 'player_2' => 11, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 11, 'player_2' => 12, 'p1_score' => 50, 'p2_score'=> 50, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 12, 'player_2' => 11, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 12, 'player_2' => 11, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 12, 'player_2' => 11, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park'],
            ['player_1' => 12, 'player_2' => 11, 'p1_score' => 100, 'p2_score'=> 25, 'played_at'=>Carbon::now(), 'location'=>'Heaton Park']


        ]);

        return view('success');
    }

    public function playersProfile($id){

        //Could check amount played thru column arithetic but i think it's more effiecient to keep a counter
        $data = DB::table('players')
            ->select('players.*','games.player_1 as player_1','games.player_2 as player_2', 
            'games.p1_score as p1_score', 'games.p2_score as p2_score', 'games.played_at', 'games.location')
            ->join('games', function ($join) use($id){
                $join->on('games.player_1', '=', DB::raw($id))
                ->orOn('games.player_2', '=', DB::raw($id));
            })
            ->where('player_id', $id)
            ->get()->toArray();


        $highscore = 0;
        $location = "";
        $time = "";
        $opponent = "";
        $total = 0;
        $played = 0;
        if(!empty($data)){
            foreach($data as $d){
                
                $p1_score = $d->p1_score;
                $p2_score = $d->p2_score;
                //check which player of the game was the specified user
                if($d->player_1 == $id){

                    //sets players highscore
                    //and details of game
                    if($p1_score > $highscore){
                        $highscore = $p1_score;
                        $location = $d->location;
                        $time = $d->played_at;
                        $opponent = $d->player_2;
                    }

                    //keeps running total
                    $total += $p1_score;

                }else{
                    //sets players highscore
                    //and details of game
                    if($p2_score > $highscore){
                        $highscore = $p2_score;
                        $location = $d->location;
                        $time = $d->played_at;
                        $opponent = $d->player_1;
                    }

                    //keeps running total
                    $total += $p2_score;
                }

                //think it's more efficient to just keep counter
                $played += 1;
            }
        }else{
            echo "Player Has Either Not Played Any Games Or Doesn't Exist";
        }

        //finally sets Players stats
        if($played != 0){
            $avg_score = round($total/$played, 1);
            $wins = $data[0]->wins;
            $losses = $data[0]->losses;
            $draws = $data[0]->draws;  

            $op_name = DB::table('players')
            ->select('username')
            ->where('player_id', $opponent)
            ->get()->toArray();
            $op_name = $op_name[0]->username;
        }else{
            $avg_score = 0;
            $wins = 0;
            $losses = 0;
            $draws = 0;  
            $op_name = "N/A";
        }

        $o = array(
            'wins'=>$wins, 'losses'=>$losses, 'draws'=>$draws, 'total'=>$total,
            'played'=>$played, 'highscore'=>$highscore, 'location'=>$location,
            'time'=>$time, 'op_name'=>$op_name, 'avg_score'=>$avg_score
        );
        return view('playerProfile', compact('o'));

    }


    public function leaderboard(){
        $data = DB::table('players')
        ->select(DB::raw(('player_id, username, total_points, wins+losses+draws AS played, 
        round(total_points/(wins+losses+draws), 1) as avg_score')))
        ->where(DB::raw('wins+losses+draws'), ">", 10)  //where played>10
        ->orderBy(DB::raw('total_points/(wins+losses+draws)'), 'desc') //orderBy avgScore Desc
        ->limit(10)// Top 10
        ->get()->toArray();
        
        return view('leaderboard', compact('data'));
    }

    public function newGame(){
        return view('newGame');
    }

    public function insertNewGame(Request $req){
        $req->validate([
            'player1' => 'required|exists:players,player_id|different:player2',
            'player2' => 'required|exists:players,player_id',
            'p1_score' => 'required|numeric|gte:0',
            'p2_score' => 'required|numeric|gte:0',
            'location' => 'required|string',

        ]);
        
        //INSERT GAME
        DB::table('games')->insert(
            ['player_1' => $req->player1, 'player_2'=> $req->player2,
             'p1_score'=>$req->p1_score, 'p2_score'=>$req->p2_score, 
             'played_at'=>Carbon::now(), 'location'=>$req->location]);

        //Checks who is the winner and updates player Stats
        if($req->p1_score > $req->p2_score){    //P1 is Winner
            $this->updateWinner($req->player1, $req->p1_score);
            $this->updateLosser($req->player2, $req->p2_score);

        }else if($req->p2_score > $req->p1_score){  //P2 is Winner
            $this->updateWinner($req->player2, $req->p2_score);
            $this->updateLosser($req->player1, $req->p1_score);
        }else{
            //DRAW
            //Update P1
            $update = DB::table('players')
            ->where('player_id', $req->player1)
            ->update([
                'draws' => DB::raw('draws + 1'),
                'total_points' => DB::raw("(SELECT total_points+'$req->p1_score' as newPoints FROM players WHERE player_id = '$req->player1')")
             ]);
            
            //Update P2
            $update = DB::table('players')
            ->where('player_id', $req->player2)
            ->update([
                'draws' => DB::raw('draws + 1'),
                'total_points' => DB::raw("(SELECT total_points+'$req->p2_score' as newPoints FROM players WHERE player_id = '$req->player2')")
            ]);
        }

        return redirect()->back()->with('success', 'Game Has Been Added');
    }

    public function updateWinner($winner, $winner_score){

        //->increment function only allows one cloumn to be updated
        $updateWinner = DB::table('players')
             ->where('player_id', $winner)
             ->update([
                'wins' => DB::raw('wins + 1'),  //increment wins
                'total_points' => 
                DB::raw("(SELECT total_points+'$winner_score' as newPoints 
                FROM players 
                WHERE player_id = '$winner')")  //gets/creates new total_points
             ]);
    }

    public function updateLosser($loser, $loser_score){
        //->increment function only allows one cloumn to be updated
        
        $updateLoser = DB::table('players')
            ->where('player_id', $loser)
            ->update([
                'losses' => DB::raw('losses + 1'),//increment wins
                'total_points' => DB::raw("(SELECT total_points+'$loser_score' as newPoints
                FROM players 
                WHERE player_id = '$loser')") //gets/creates new total_points
        ]);
    }
}
