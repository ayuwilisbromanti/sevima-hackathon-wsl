<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionModel;
use App\Models\HistoryModel;
use App\Models\UserModel;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ChatController extends Controller
{
    public function getQuestion(Request $req){
        $pertanyaan = $req->question;
        $id_user = $req->id_user;
        $question = questionModel::where('question', $pertanyaan)->first();

        $insert_history = HistoryModel::create([
            'id_question'=>$question->id,
            'id_user'=>$id_user,
            'question'=>$question->question,
            'answer'=>$question->answer
        ]);

        if($insert_history){
            return Response()->json(['status'=>true]);
        }else{
            return Response()->json(['status'=>false]);
        }
    }

    public function getAnswer(){
        $answer = HistoryModel::get();
        return Response()->json($answer);
    }

    public function login(Request $req){
        $username = $req->username;
        $password = $req->password;

        $login = UserModel::where('username',$username)
                ->where('password',$password)
                ->first();
        if(!empty($login)){
            return Response()->json(['status'=>true, 'data'=>$login]);
        }else{
            return Response()->json(['status'=>false]);
        }
    }

    public function register(Request $req){

        $register = UserModel::create([
            'username' => $req->username,
            'name' => $req->name,
            'password' => $req->password
        ]);

        if($register){
            return Response()->json(['status'=>true]);
        }else{
            return Response()->json(['status'=>false]);
        }
    }
}
