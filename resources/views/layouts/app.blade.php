<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Başlık')</title>
</head>
<body>
    <header>
        <nav>
            @auth
                <a href="{{ route('posts.index') }}">Bloglar</a>
                <a href="{{ route('dashboard') }}">Yönetim Paneli</a>
                <form action="{{ route('logout') }}" method="post" style="display: inline">
                    @csrf
                    <button type="submit">Çıkış Yap</button>
                </form>
            @else
                <a href="{{ route('login') }}">Giriş Yap</a>
                <a href="{{ route('register') }}">Kayıt Ol</a>
            @endauth
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Laravel Temel Blog Projesi 2025</p>
    </footer>
</body>
</html>
