@extends('layouts.app')

@section('title', 'Submit Your Anonymous Question')

@section('content')
    <div class="container">
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
                <textarea id="question" name="question" class="form-control" rows="5" required placeholder="Enter your anonymous question"></textarea>
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

