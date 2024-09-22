@extends('layouts.app')

@section('title', 'Submit Your Anonymous Question')

@section('content')
    <div class="container">
        <a href="{{ url('/') }}" class="btn-back">Back</a> <!-- Back button -->

        <h2>Submit Your Anonymous Question</h2>

        <!-- Form Start -->
        <form action="{{ url('/submit-question') }}" method="POST">
            @csrf
            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Your Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required placeholder="Enter your email address">
            </div>

            <!-- Question Input -->
            <div class="form-group">
                <label for="question">Your Question</label>
                <textarea id="question" name="question" class="form-control" rows="10" required placeholder="Enter your anonymous question"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-submit">Submit</button>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endsection

<style>
    body {
        background-color: #f5f5f5; /* Light grey background */
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        position: relative;
    }

    .btn-back {
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 1.3rem;
        color: #0096c7;
        background-color: transparent;
        border: none;
        text-decoration: underline;
        cursor: pointer;
        transition: color 0.3s;
    }

    .btn-back:hover {
        color: #0077b6;
    }

    h2 {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-group {
        width: 70vw; /* Set the width to 70% of the viewport */
        max-width: 1000px; /* Limit the maximum width to 1000px */
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 1rem;
        color: #333;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%; /* Take up the full width of the form group */
        padding: 15px;
        font-size: 1rem; /* Ensure consistent font size */
        font-family: inherit; /* Ensure consistent font family */
        color: #333;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: #0096c7; /* Matching button color */
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
        margin-top: 20px;
    }

    .btn-submit:hover {
        background-color: #0077b6;
        transform: scale(1.05);
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
        padding: 15px;
        border-radius: 5px;
        margin-top: 20px;
        width: 70vw;
        max-width: 1000px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
