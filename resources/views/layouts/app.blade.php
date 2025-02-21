@auth
    <a href="{{ route('dashboard') }}">Yönetim Paneli</a>
    <form action="{{ route('logout') }}" method="post" style="display: inline">
        @csrf
        <button type="submit">Çıkış Yap</button>
    </form>
@else
    <a href="{{ route('login') }}">Giriş Yap</a>
    <a href="{{ route('register') }}">Kayıt Ol</a>
@endauth
