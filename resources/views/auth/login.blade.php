<form method="POST" action="{{ route('login.post') }}">
    @csrf
    <input type="email" name="email" placeholder="E-posta">
    <input type="password" name="password" placeholder="Şifre">
    <button type="submit">Giriş Yap</button>
</form>
