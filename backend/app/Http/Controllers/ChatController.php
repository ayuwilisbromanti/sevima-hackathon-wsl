<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionModel;
use App\Models\HistoryModel;

class ChatController extends Controller
{
    public function getQuestion(Request $req){
        $pertanyaan = $req->question;
        $question = questionModel::where('question', $pertanyaan)->first();

        $insert_history = HistoryModel::create([
            'id_question'=>$question->id,
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
}
