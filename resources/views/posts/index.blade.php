@extends('layouts.app')

@section('title', 'Bloglar')

@section('content')
    <div class="container">
        <h3 class="text-center mb-4">Blog Listesi</h3>
        @auth
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Yeni Yazı Ekle</a>
        @endauth

        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($posts as $post)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="display-6">{{ $post->title }}</span>
                            <span>{{ $post->content }}</span>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bu yazıyı silmek istediğinizden emin misiniz?');">
                                @csrf
                                @method('DELETE')
                                @if (auth()->check() && $post->user_id === auth()->user()->id)
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning text-white">Düzenle</a>
                                <button type="submit" class="btn btn-sm btn-danger" >Sil</button>
                                @endif
                            </form>
                        </li>
                        <br>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection

