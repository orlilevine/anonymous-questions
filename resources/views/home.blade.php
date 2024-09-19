@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h2>Welcome</h2>
        <p class="description">Questions will remain anonymous. You will hear back as soon as possible.</p>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="button-container">
            <a href="{{ url('/submit-question') }}" class="btn-submit">Submit your anonymous question</a>
        </div>
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
    }

    h2 {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 10px;
    }

    .description {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 20px;
        max-width: 600px;
        text-align: center;
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
        margin-bottom: 20px;
        max-width: 600px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
