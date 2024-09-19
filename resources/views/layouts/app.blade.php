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
        <h1>Title</h1>
        <!--add in navbar here if need it later on-->
    </header>

    <main>
        @yield('content')  <!--extend content on each page to add page specific content -->
    </main>

`   <footer>
        <!--add in footer later on possibly-->
    </footer>

</body>
</html>

