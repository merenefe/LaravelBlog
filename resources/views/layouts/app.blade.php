<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Başlık')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container justify-content-between">
            @auth
                <div>
                    <a class="navbar-brand" href="{{ route('posts.index') }}">Bloglar</a>
                    <a class="navbar-brand" href="{{ route('dashboard') }}">Yönetim Paneli</a>
                </div>
                <form action="{{ route('logout') }}" method="post" style="display: inline">
                    @csrf
                    <button type="submit" class="btn text-white">Çıkış Yap</button>
                </form>
            @else
                <div>
                    <a class="navbar-brand" href="{{ route('login') }}">Giriş Yap</a>
                    <a class="navbar-brand" href="{{ route('register') }}">Kayıt Ol</a>
                </div>
            @endauth
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 fixed-bottom">
        <p>Laravel Temel Blog Projesi 2025</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
