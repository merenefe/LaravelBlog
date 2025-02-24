@extends('layouts.app')

@section('title', 'Blog Sayfası - '.$post->title)

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>Yazar: {{ $post->user->name }} | {{ $post->created_at->format('d M Y') }}</p>
            <p>{{ $post->content }}</p>
            <hr>
            <h5>Yorumlar</h5>
            <p>Henüz Yorum Yok</p>
        </div>
    </div>
@endsection
