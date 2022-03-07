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
            ->select('username', 'email', 'telephone')
            ->get()->toArray();
        return view('showPlayers', compact('users'));
    }

    public function showPlayerDetails($id){
        $data = DB::table('players')
        ->select('*')
        ->where('player_id', '=', $id)
        ->get()->toArray();
        if(!empty($data)){
            return view('showPlayerDetails', compact('data'));
        }else{
            echo "Sorry! UserID was not found";
        }
    }

    public function updatePlayerDetails(Request $req){
        //exclude_if:email, $req->email if(reqdata = select){same = true}
            //accepted if: same
        $data = DB::table('players')
            ->select('email', 'telephone')
            ->where('player_id', '=', $req->id)
            ->get()->toArray();

        //dd($same);
        $req->validate([
            'uname' => 'required',

            //makes sure email is unique unless the user didn't change it
            'email' => "required|email|exclude_if:email,exists:players,".$data[0]->email."|unique:players,email",
            'tele'=> "required|numeric|exclude_if:tele,exists:players,".$data[0]->telephone."|unique:players,telephone|digits:11"
        ]);

        $update = DB::table('players')
        ->where('player_id', $req->id)
        ->update([
            'username' => $req->uname,
            'email' => $req->email,
            'telephone' => $req->tele,
 
         ]);
         //dd($req->id, $req->uname, $req->email);
        return redirect()->back()->with('success', 'Row Has Been Updated');

    }

    public function newPlayer(){
        return view('newPlayer');
    }

    public function insertNewPlayer(Request $req ){
        //dd(strlen(strval($req->tele)));
        $req->validate([
            'uname' => 'required',
            'email' => 'required|email|unique:players,email',
            'tele' => 'required|numeric|unique:players,telephone|digits:11'

        ]);

        DB::table('players')->insert(['username' => $req->uname, 'email'=> $req->email, 'telephone'=>$req->tele, 'wins'=>0, 'losses'=>0, 'draws'=>0, 'total_points'=>0, 'joined'=>Carbon::now()]);
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
            ['username' => 'liam', 'email'=> 'test1@test.com', 'telephone'=>"01234567890" ,'wins'=>0, 'losses'=>12, 'draws'=>0, 'total_points'=>120, 'joined'=>Carbon::now()],
            ['username' => 'dave', 'email'=> 'test2@test.com', 'telephone'=>"12345678901" ,'wins'=>12, 'losses'=>0, 'draws'=>0, 'total_points'=>1200 ,'joined'=>Carbon::now()],

            ['username' => 'steve', 'email'=> 'test3@test.com','telephone'=>"23456789012" ,'wins'=>1, 'losses'=>10, 'draws'=>1, 'total_points'=>500,  'joined'=>Carbon::now()],
            ['username' => 'tom', 'email'=> 'test4@test.com','telephone'=>"34567890123" , 'wins'=>10, 'losses'=>1, 'draws'=>1, 'total_points'=>1075 ,'joined'=>Carbon::now()],
            
            ['username' => 'allen', 'email'=> 'test5@test.com','telephone'=>"45678901234" ,'wins'=>2, 'losses'=>8, 'draws'=>2, 'total_points'=>300,  'joined'=>Carbon::now()],
            ['username' => 'ben', 'email'=> 'test6@test.com', 'telephone'=>"56789012345" ,'wins'=>8, 'losses'=>2, 'draws'=>2, 'total_points'=>950,'joined'=>Carbon::now()],
            
            ['username' => 'barry', 'email'=> 'test7@test.com','telephone'=>"67890123456" ,'wins'=>3, 'losses'=>6, 'draws'=>3, 'total_points'=>600, 'joined'=>Carbon::now()],
            ['username' => 'harry', 'email'=> 'test8@test.com','telephone'=>"78901234567" ,'wins'=>6, 'losses'=>3, 'draws'=>3, 'total_points'=>825, 'joined'=>Carbon::now()],
            
            ['username' => 'chris', 'email'=> 'test9@test.com','telephone'=>"89012345678" ,'wins'=>3, 'losses'=>5, 'draws'=>4, 'total_points'=>625, 'joined'=>Carbon::now()],
            ['username' => 'stuart', 'email'=> 'test10@test.com','telephone'=>"90123456789" ,'wins'=>5, 'losses'=>3, 'draws'=>4, 'total_points'=>775, 'joined'=>Carbon::now()],
            
            //these two won't have 10 games
            ['username' => 'john', 'email'=> 'test11@test.com','telephone'=>"01617208361" ,'wins'=>2, 'losses'=>4, 'draws'=>2, 'total_points'=>400, 'joined'=>Carbon::now()],
            ['username' => 'marcus', 'email'=> 'test12@test.com','telephone'=>"07505792373" ,'wins'=>4, 'losses'=>2, 'draws'=>2, 'total_points'=>550, 'joined'=>Carbon::now()]
            
        
        ]);

        return view('success');
    }
}
