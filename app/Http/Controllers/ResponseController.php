<?php


namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function showQuestion($id)
    {
        $question = Question::findOrFail($id);

        return view('responseform', compact('question'));
    }

    public function submitResponse(Request $request, $id)
    {
        $question = Question::findOrFail($id);
        $question->response = $request->input('response');
        $question->status = 'answered';
        $question->save();

        return redirect()->route('showQuestion', ['id' => $id])
            ->with('success', 'Response submitted successfully.');
    }
}
