<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- add link to my CSS page -->
</head>

<body>
<header>
    <div class="logo-container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    </div>
</header>

<main>
    @yield('content')  <!--extend content on each page to add page-specific content -->
</main>

<footer>
    <!--add in footer later on possibly-->
</footer>

</body>
</html>

<style>
    .logo-container {
        text-align: center;
        padding: 20px;
    }

    .logo {
        max-width: 100px;
        height: auto;
    }

    main {
        margin-top: -35px; /* Optional: Adjust margin to bring content even closer */
    }
</style>
