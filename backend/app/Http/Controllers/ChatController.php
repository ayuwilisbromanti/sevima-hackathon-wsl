<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionModel;
use App\Models\HistoryModel;
use Illuminate\Support\Carbon;

class ChatController extends Controller
{
    public function postQuestion(Request $req){
        $pertanyaan = $req->question;
        $now = Carbon::now();
        $end = date('Y-m-d', strtotime($now));
        $created_at = $end;
        $question = questionModel::where('question', $pertanyaan)->first();

        $insert_history = HistoryModel::create([
            'id_question'=>$question->id,
            'question'=>$question->question,
            'answer'=>$question->answer,
            'created_at'=>$created_at
        ]);

        if($insert_history){
            return Response()->json(['status'=>true]);
        }else{
            return Response()->json(['status'=>false]);
        }
    }

    public function getAnswer(){
        $now = Carbon::now();
        $end = date('Y-m-d', strtotime($now));
        $answer = HistoryModel::where('created_at', $end)->get();
        return Response()->json($answer);
    }

    
}
