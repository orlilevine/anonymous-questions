<?php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ResponseController extends Controller
{
    public function showQuestion($id)
    {
        $question = Question::findOrFail($id);

        return view('responseform', compact('question'));
    }

    public function submitResponse(Request $request, $id)
    {
        // Save the response in the responses table
        Response::create([
            'question_id' => $id,
            'response' => $request->input('response')
        ]);

        // Update the question's status to 'answered'
        $question = Question::findOrFail($id);
        $question->status = 'answered';
        $question->save();

        return redirect()->route('showQuestion', ['id' => $id])
            ->with('success', 'Response submitted successfully.');
    }

    public function pendingQuestions()
    {
        // Get all questions that are still pending
        $pendingQuestions = DB::table('questions')
            ->where('status', 'pending')
            ->get();

        // Pass the unanswered questions to the view
        return view('pendingquestions', ['pendingQuestions' => $pendingQuestions]);
    }

}

