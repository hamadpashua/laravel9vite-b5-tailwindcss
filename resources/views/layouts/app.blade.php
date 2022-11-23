<!DOCTYPE html>
<html lang="en">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased">
    <ul>
        <li><a href="{{ route('blog.index') }}">Home page</a></li>
        <li><a href="{{ route('blog.create') }}">Create post</a></li>
        <li><a href="">Login</a></li>
        <li><a href="">Register</a></li>
    </ul>
    @yield('content')
</body>
</html>
