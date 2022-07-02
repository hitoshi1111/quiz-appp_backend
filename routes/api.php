<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Title;
use App\Models\Category;
use App\Models\Quiz;
use App\Models\AnswerHistory;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/titles/new', function () {
    return Title::latest()->take(5)->get();
});

Route::get('/categories', function () {
    return Category::all();
});

Route::get('/titles', function (Request $request) {
    return  Title::where('category_id', $request->category_id)->paginate(1);
});

Route::get('/quiz/{quiz_id}', function ($quiz_id) {
    $quiz =  Quiz::find($quiz_id);
    $title = Quiz::find($quiz_id);
    return [
        "id" => $quiz->id,
        "title" => $title,
        "question" => $quiz->question,
        "answer1" => $quiz->answer1,
        "answer2" => $quiz->answer2,
        "answer3" => $quiz->answer3,
        "answer4" => $quiz->answer4,
        "answer5" => $quiz->answer5,
    ];
})->where('quiz_id', '[0-9]+');

Route::post('/quiz/answer', function (Request $request) {
    // バリデーション
    $validateData = $request->validate([
        'quizId' => 'required|integer',
        'answer' => 'required|between:1,5',
    ]);
    $answer_history = new AnswerHistory();
    $answer_history->quiz_id = $request->quizId;
    $answer_history->answer = $request->answer;
    $result = $answer_history->save();
    $quiz = Quiz::find($request->quizId);
    $next_quiz_id = getNextQuizId($quiz->title_id, $quiz->id);
    return [
        'answer' => $quiz->answer,
        'description' => $quiz->description,
        'next_quiz_id' => $next_quiz_id,
    ];
});

// 次のクイズID(ない場合はnull)
function getNextQuizId($title_id, $quiz_id) {
    $is_found = false;
    $quizzes = Quiz::where('title_id', $title_id)->get();
    foreach($quizzes as $quiz) {
        if ($is_found) {
            $quiz->id;
        }
        if ($quiz->id === $quiz_id) {
            $is_found = true;
        }
        return null;
    }
}

