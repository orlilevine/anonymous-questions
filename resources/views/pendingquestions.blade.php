@extends('layouts.app')

@section('title', 'Pending Questions')

@section('content')
    <div class="container">
        <h2>Pending Questions</h2>

        @if($pendingQuestions->isEmpty())
            <p>There are no pending questions at the moment.</p>
        @else
            <ul class="question-list">
                @foreach($pendingQuestions as $question)
                    <li class="question-item">
                        <p><strong>Question:</strong> {{ $question->question }}</p>
                        <p><strong> Asked on:</strong> {{ \Carbon\Carbon::parse($question->created_at)->format('F j, Y') }}</p>
                        <a href="{{ route('showQuestion', ['id' => $question->id]) }}" class="btn-respond">Respond to this question</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection

<style>
    .container {
        padding: 20px;
    }

    .question-list {
        list-style: none;
        padding: 0;
    }

    .question-item {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
    }

    .btn-respond {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0096c7;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-respond:hover {
        background-color: #0077b6;
        transform: scale(1.05);
    }
</style>
