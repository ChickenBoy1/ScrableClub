<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use App\User;


class PlayerController extends Controller
{
    //
    public function showPlayers()
    {
        $users = DB::table('players')
            ->select('name', 'email as user_email')
            ->get()->toArray();
        return view('showPlayers', compact('users'));
    }

    public function showPlayerDetails($id){
        $data = DB::table('players')
        ->select('*')
        ->where('player_id', '=', $id)
        ->get()->toArray();

        return view('showPlayerDetails', compact('data'));
    }

    public function updatePlayerDetails(Request $req){
        //exclude_if:email, $req->email if(reqdata = select){same = true}
            //accepted if: same
        $data = DB::table('players')
            ->select('email')
            ->where('player_id', '=', $req->id)
            ->get()->toArray();

        //dd($same);
        $req->validate([
            'uname' => 'required',

            //makes sure email is unique unless the user didn't change it
            'email' => "required|email|exclude_if:email,exists:players,".$data[0]->email."|unique:players,email"
        ]);

        $update = DB::table('players')
        ->where('player_id', $req->id)
        ->update([
            'username' => $req->uname,
            'email' => $req->email 
         ]);
         //dd($req->id, $req->uname, $req->email);
        return redirect()->back()->with('success', 'Row Has Been Updated');

    }

    public function newPlayer(){
        return view('newPlayer');
    }

    public function insertNewPlayer(Request $req ){

        $req->validate([
            'uname' => 'required',
            'email' => 'required|email|unique:players,email'
        ]);

        DB::table('players')->insert(['username' => $req->uname, 'email'=> $req->email, 'wins'=>0, 'losses'=>0, 'draws'=>0, 'total_points'=>0, 'joined'=>Carbon::now()]);
        return redirect()->back()->with('success', 'User Has Been Added');
    }

    public function clearPlayers(){
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('players')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    public function insertPlayers(){
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('players')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('players')->insert([                          //100 for win, 25 for loss, 50 for draw, All play 12 games
            ['username' => 'liam', 'email'=> 'test1@test.com', 'wins'=>0, 'losses'=>12, 'draws'=>0, 'total_points'=>120, 'joined'=>Carbon::now()],
            ['username' => 'dave', 'email'=> 'test2@test.com', 'wins'=>12, 'losses'=>0, 'draws'=>0, 'total_points'=>1200 ,'joined'=>Carbon::now()],

            ['username' => 'steve', 'email'=> 'test3@test.com','wins'=>1, 'losses'=>10, 'draws'=>1, 'total_points'=>500,  'joined'=>Carbon::now()],
            ['username' => 'tom', 'email'=> 'test4@test.com', 'wins'=>10, 'losses'=>1, 'draws'=>1, 'total_points'=>1075 ,'joined'=>Carbon::now()],
            
            ['username' => 'allen', 'email'=> 'test5@test.com','wins'=>2, 'losses'=>8, 'draws'=>2, 'total_points'=>300,  'joined'=>Carbon::now()],
            ['username' => 'ben', 'email'=> 'test6@test.com', 'wins'=>8, 'losses'=>2, 'draws'=>2, 'total_points'=>950,'joined'=>Carbon::now()],
            
            ['username' => 'barry', 'email'=> 'test7@test.com','wins'=>3, 'losses'=>6, 'draws'=>3, 'total_points'=>600, 'joined'=>Carbon::now()],
            ['username' => 'harry', 'email'=> 'test8@test.com','wins'=>6, 'losses'=>3, 'draws'=>3, 'total_points'=>825, 'joined'=>Carbon::now()],
            
            ['username' => 'chris', 'email'=> 'test9@test.com','wins'=>3, 'losses'=>5, 'draws'=>4, 'total_points'=>625, 'joined'=>Carbon::now()],
            ['username' => 'stuart', 'email'=> 'test10@test.com','wins'=>5, 'losses'=>3, 'draws'=>4, 'total_points'=>775, 'joined'=>Carbon::now()],
            
            //these two won't have 10 games
            ['username' => 'john', 'email'=> 'test11@test.com','wins'=>2, 'losses'=>4, 'draws'=>2, 'total_points'=>400, 'joined'=>Carbon::now()],
            ['username' => 'marcus', 'email'=> 'test12@test.com','wins'=>4, 'losses'=>2, 'draws'=>2, 'total_points'=>550, 'joined'=>Carbon::now()]
            
        
        ]);

        return view('success');
    }
}
