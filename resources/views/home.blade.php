@extends('layouts.app')

@section('title', 'Ana Sayfa')

@section('content')
<div class="container">
    <h1 class="my-4">Hoş Geldiniz!</h1>
    <p>Burası anasayfadır.</p>

    <h2>
        Son Blog Yazıları
    </h2>

    <ul class="list-group">
        @foreach ($posts as $post)
            <li class="list-group-item">
                {{ $post->title }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
