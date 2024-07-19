<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nicholas Graham</title>
    @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/css/style_mobile.css', 'resources/css/blog/blog.css', "resources/css/universals.css",
                "resources/css/headerbar.css", 'build'])
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <header class="">
        <div class="header-bar">
        <a href="/" class="header-logo-link">
            <img src="img/Logo_white.svg" class="header-logo" alt="Logo" />
        </a>
        <div class="mobile-menu-toggle">☰</div>
        <div class="header-links">
            <a href="/blog" class="header-link about-me">Blogs</a>
            <a href="/puter" class="header-link puter">Puter</a>
            <a href="/projects" class="header-link projects">Projects</a>
            <a href="/contact" class="header-link contact">Contact Me</a>
        </div>
    </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="">
        <div class="">
            <p>&copy; {{ date('Y') }} Nicholas Graham. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>