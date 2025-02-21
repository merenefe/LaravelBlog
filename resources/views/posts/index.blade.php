@extends('layouts.app')

@section('title', 'Bloglar')

@section('content')
<h3>Blog Listesi</h3>
<ul>
    @foreach ($posts as $post)
        <li>
            {{ $post->title }} - <a href="{{ route('posts.edit', $post->id) }}">Düzenle</a> |
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Sil</button>
            </form>
            <ul>
                <li>{{ $post->content }}</li>
            </ul>
        </li>
        <br>
    @endforeach
</ul>

<a href="{{ route('posts.create') }}">Yeni Yazı Ekle</a>
@endsection

