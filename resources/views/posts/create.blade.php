@extends('layouts.app')

@section('title', 'Yeni Blog Yazısı')

@section('content')
    <div class="container">
        <h3 class="text-center mb-4">Yeni Blog Yazısı</h3>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Başlık</label>
                        <input type="text" name="title" placeholder="Başlık" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">İçerik</label>
                        <textarea name="content" placeholder="İçerik" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
@endsection

