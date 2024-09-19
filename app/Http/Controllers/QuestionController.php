<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function submitQuestion(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'question' => 'required|min:10',
        ]);

        // Create a new question record
        Question::create([
            'email' => $request->input('email'),
            'question' => $request->input('question'),
            'status' => 'pending', // Default value
        ]);

        // Redirect to the home page with a success message
        return redirect('/')->with('success', 'Your question has been submitted!');
    }
}
