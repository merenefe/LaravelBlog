<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ old('title', $post->title) }}" placeholder="Başlık">
    <textarea name="content" placeholder="İçerik"> {{ old('content', $post->content) }} </textarea>
    <button type="submit">Güncelle</button>
</form>
