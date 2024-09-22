@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h2>Anonymous Taharas HaMishpacha Questions</h2>
        <p class="description">Welcome to the anonymous question system. Using this system you will be able to submit an anonymous question to Rabbi Goldberg. Please use the form linked below to enter your email address and your question.<br><br>
            When you click the 'Send' button, the system will send your question, but not your email to Rabbi Goldberg. The system will collect the Rabbi's reply and email it back to you.<br><br>

            At no time will the Rabbi be able to determine the email address that asked the question.<br><br>

            To ensure your anonymity, if for whatever reason, your reply cannot be delivered (your mailbox is full, etc.), we will not be notified, or receive any returned e-mail, as the system will automatically reject any returns.<br><br>

            Barring unusual circumstances, Rabbi Goldberg will reply to your question within twelve (12) hours, therefore if you do not receive a reply within 24 hours:<br><br>

            - Make sure that your account can accept e-mail from BRSonline.org (i.e. from the mailing list),<br>
            - Determine if your computer software or e-mail provider is filtering it to a 'quarantine' or 'spam' or 'junk' folder.<br>
            - Resubmit your question.</p>

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
        font-family: Arial, sans-serif; /* More readable font */
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
        margin-bottom: 20px;
        text-align: center;
    }

    .description {
        font-size: .9rem; /* Slightly smaller font size for better readability */
        color: #555;
        line-height: 1.5; /* Increased line height for better readability */
        max-width: 750px;
        text-align: left;
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
