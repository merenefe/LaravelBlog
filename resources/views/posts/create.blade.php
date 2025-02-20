<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Başlık">
    <textarea name="content" placeholder="İçerik"></textarea>
    <button type="submit">Kaydet</button>
</form>
