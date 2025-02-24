@extends('layouts.app')

@section('title', 'Blog Sayfası - ' . $post->title)

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p class="text-muted">
                Kategoriler:
                @foreach ($post->categories as $category)
                    <span class="badge bg-success">{{ $category->name }}</span>
                @endforeach
            </p>
            <p>Yazar: {{ $post->user->name }} | {{ $post->created_at->format('d M Y') }}</p>
            <p>{{ $post->content }}</p>
            <hr>
            <h5>Yorumlar</h5>
            <ul class="list-group">
                @foreach ($comments as $comment)
                    <li class="list-group-item">
                        <strong>{{ $comment->user->name }}</strong> - {{ $comment->created_at->diffForHumans() }}
                        <p>{{ $comment->content }}</p>
                    </li>
                @endforeach
            </ul>

            @auth
                <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-3">
                    @csrf
                    <textarea name="content" class="form-control" rows="3" placeholder="Yorumunuzu yazın..." required></textarea>
                    <button type="submit" class="btn btn-primary mt-2">Gönder</button>
                </form>
            @else
                <p>Yorum yapabilmek için <a href="{{ route('login') }}">giriş yapmalısınız</a>.</p>
            @endauth
        </div>
    </div>
@endsection
