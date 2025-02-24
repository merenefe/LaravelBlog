@extends('layouts.app')

@section('title', 'Ana Sayfa')

@section('content')
<div class="container">
    <h1 class="my-4">Hoş Geldiniz!</h1>
    <p>Burası anasayfadır.</p>

    <h2>
        Son Blog Yazıları
    </h2>

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card mb4 shadow-sm">
                    <img src="https://picsum.photos/seed/picsum/50/50" class="card-img-top" alt="Blog Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100, '...') }}</p>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Devamını Oku</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
