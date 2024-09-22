@extends('layouts.app')

@section('title', 'Respond to Question')

@section('content')
    <div class="container">
        <h2>Respond to Question</h2>

        @if (session('success'))
            <!-- Show success message and link to pending questions -->
            <div class="alert alert-success">
                Response submitted successfully.
            </div>
            <a href="/pending-questions" class="btn-pending">Go to pending questions</a>
        @else
            <!-- Display question -->
            <div class="question">
                <h3>Question:</h3>
                <p>{{ $question->question }}</p>
            </div>

            <!-- Form for response -->
            <form action="{{ route('submitResponse', ['id' => $question->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="response">Your Response</label>
                    <textarea id="response" name="response" class="form-control" rows="5" required placeholder="Enter your response here"></textarea>
                </div>

                <button type="submit" class="btn-submit">Submit Response</button>
            </form>
        @endif
    </div>
@endsection

<style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        width: 100%;
    }

    .question {
        max-width: 100%;
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
    }

    .form-group {
        width: 100%;
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 1rem;
        color: #333;
        margin-bottom: 5px;
    }

    .form-control {
        width: 70vw;
        max-width: 1000px;
        padding: 15px;
        font-size: 1rem;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: #0096c7;
        box-shadow: 0 0 5px rgba(0, 150, 199, 0.5);
        outline: none;
    }

    .btn-submit {
        display: inline-block;
        padding: 15px 30px;
        font-size: 1.1rem;
        color: #fff;
        background-color: #0096c7;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s, transform 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #0077b6;
        transform: scale(1.05);
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
        padding: 15px;
        border-radius: 5px;
        margin-top: 20px;
        width: 50vw;
        max-width: 1000px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-pending {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1rem;
        color: #fff;
        background-color: #28a745;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        margin-top: 15px;
        transition: background-color 0.3s, transform 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .btn-pending:hover {
        background-color: #218838;
        transform: scale(1.05);
    }
</style>
