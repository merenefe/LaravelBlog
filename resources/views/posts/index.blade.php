@extends('layouts.app')

@section('title', 'Bloglar')

@section('content')
    <div class="container">
        <h3 class="text-center mb-4">Bloglar</h3>
        @auth
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Yeni Yazı Ekle</a>
        @endauth

        @if ($posts->isEmpty())
            <div class="alert alert-info text-center">Henüz bir yazı eklenmemiş!</div>
        @else
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">{{ $post->title }}</a>
                                </h5>
                                <p class="card-text text-muted">{{ Str::limit($post->content, 100, '...') }}</p>
                                <small>Yazar: {{ $post->user->name }} | {{ $post->created_at->format('d M Y') }}</small>

                                @if (auth()->check() && $post->user_id === auth()->user()->id)
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline mt-3"
                                        onsubmit="return confirm('Bu yazıyı silmek istediğinizden emin misiniz?');">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="btn btn-sm btn-warning text-white">Düzenle</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    </li>
                    <br>
                @endforeach
            </div>
        @endif

    </div>
@endsection
