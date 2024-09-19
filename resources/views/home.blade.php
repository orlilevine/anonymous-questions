@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h2>Welcome</h2>
        <p>Questions will remain anonymous. You will hear back as soon as possible.</p>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="button-container">
            <a href="{{ url('/submit-question') }}" class="btn-submit">Submit your anonymous question.</a>
        </div>
    </div>
@endsection

<style>
    .container {
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .btn-submit {
        display: inline-block;
        padding: 15px 30px;
        font-size: 18px;
        color: #fff;
        background-color: #007bff; /* Blue color */
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .btn-submit:hover {
        background-color: #0056b3; /* Darker blue */
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
</style>
