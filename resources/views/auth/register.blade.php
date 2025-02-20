<form method="POST" action="{{ route('register.post') }}">
    @csrf
    <input type="text" name="name" placeholder="Adınız">
    <input type="email" name="email" placeholder="E-posta">
    <input type="password" name="password" placeholder="Şifre">
    <input type="password" name="password_confirmation" placeholder="Şifre (Tekrar)">
    <button type="submit">Kayıt Ol</button>
</form>
