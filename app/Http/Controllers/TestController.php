<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

use App\Models\Test;
use App\Models\QuestionTest;
use App\Models\OptionTest;

use App\Models\Evaluasi;
use App\Models\QuestionEval;
use App\Models\OptionEval;

class TestController extends Controller
{
  public function shownewtest($id_train)
  {
    $training = Training::find($id_train);
    $test = new Test;
    $test -> id_training = $training-> id_training;
    $test -> save();

    return view('admin.test.newtest', ['train'=>$training, 'test'=>$test]);
  }

  public function savequestiontest(Request $request)
  {
    // dd($request);
    $count = count($request->question);

    for($i=0; $i<$count; $i++)
    {
      $newquestion = new QuestionTest;
      $newquestion -> id_test = $request -> id_test;
      $newquestion -> questions = $request -> question[$i] ;
      $newquestion -> save();

      $newanswer1 = new OptionTest;
      $newanswer1 -> id_question = $newquestion -> id_question ;
      $newanswer1 -> option      = $request-> answer1[$i]       ;
      $newanswer1 -> save();

      $newanswer2 = new OptionTest;
      $newanswer2 -> id_question = $newquestion -> id_question ;
      $newanswer2 -> option      = $request-> answer2[$i]       ;
      $newanswer2 -> save();

      $newanswer3 = new OptionTest;
      $newanswer3 -> id_question = $newquestion -> id_question ;
      $newanswer3 -> option      = $request-> answer3[$i]       ;
      $newanswer3 -> save();

      $newanswer4 = new OptionTest;
      $newanswer4 -> id_question = $newquestion -> id_question ;
      $newanswer4 -> option      = $request-> answer4[$i]       ;
      $newanswer4 -> save();
    }

    return redirect()->action(
          'TestController@showdone', ['id_test' => $request->id_test]
      );
  }

  public function showdone($id_test)
  {
      // dd($id_test);
      $question = QuestionTest::where('id_test',$id_test)->get();
      $option = OptionTest::all();
      // dd($id_test, $question, $option);

      return view('admin.test.test',['quest'=>$question, 'option'=>$option]);
  }

  public function showtest($id_training, $id_test)
  {
      // dd($id_test);
      $question = QuestionTest::where('id_test',$id_test)->get();
      $option = OptionTest::all();
      // dd($id_test);

      return view('admin.test.test',['quest'=>$question, 'option'=>$option]);
  }

  public function addnewquestion($id_training, $id_test)
  {
    return view('admin.test.newquestion', ['id_train'=>$id_training, 'id_test'=>$id_test]);
  }


  public function editquestion($id_training, $id_test)
  {
    # code...
  }

  public function updatequestion($value='')
  {
    # code...
  }

  public function destroyquestion($value='')
  {
    # code...
  }


}
