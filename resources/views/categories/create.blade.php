@extends('layouts.app')

@section('title', 'Yeni Kategori Ekle')

@section('content')
    <div class="container">
        <h3>Yeni Kategori Ekle</h3>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Kategori Adı</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Kategori Ekle</button>
        </form>
    </div>
@endsection
