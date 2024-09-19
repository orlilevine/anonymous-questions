<?php

use App\Models\Question;

class QuestionController extends Controller {
    public function showForm() {
        return view(questionform);
    }

}
