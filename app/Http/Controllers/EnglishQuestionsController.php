<?php

namespace App\Http\Controllers;

use App\Equestions;
use Illuminate\Http\Request;
use App\User;




class EnglishQuestionsController extends Controller
{
    //


    public function index() {

        $questions = Equestions::all();

        return view('english.index')->with('questions', $questions);

    }

    public function isCompleted() {

        $users = User::find(1);

//        foreach ($users->equestions as $equestion) {
//
//       echo $equestion->id;
//
//       }

        return view('english.isCompleted')->with('users',$users);

    }

    public function check(Request $request, $id) {

            $question = Equestions::find($id);


            if($request->answer == $question->right_answer){

                   $question->users()->attach($request->user()->id);

//                    'user_id' => $request->user()->id,

            }

            return redirect()->back();

        }



    public function single($id) {

            $question = Equestions::find($id);

            return view('english.single')->with('question', $question);

    }



}
