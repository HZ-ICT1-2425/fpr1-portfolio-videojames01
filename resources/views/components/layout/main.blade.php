<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>James Portfolio Website</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>
<body class="home">
{{-- Navigation bar --}}
<nav class="navbar">
    <ul>
        <li><a href={{ route('home') }}>Home</a></li>
        <li><a href={{ route('profile') }}>Profile</a></li>
        <li><a href={{ route('dashboard') }}>Dashboard</a></li>
        <li><a href={{ route('posts.index') }}>Blog</a></li>
        <li><a href={{ route('faq') }}>FAQ</a></li>
    </ul>
</nav>
<a href="https://hz.nl/en/" target="_blank"><img src="/images/hz-logo.png" alt="HZ logo" id="hz-logo"></a>

{{-- Content --}}
{{ $slot }}

{{-- Footer --}}
<footer>
    <p>&copy; No copyright | Author: James Openshaw</p>
</footer>

</body>
</html>
