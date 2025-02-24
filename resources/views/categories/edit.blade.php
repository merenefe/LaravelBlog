@extends('layouts.app')

@section('title', 'Kategori Düzenle - '.$category->name)

@section('content')
    <div class="container">
        <h3 class="text-center mb-4">Kategori Düzenle</h3>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Kategori Adı</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Güncelle</button>
        </form>
    </div>
@endsection
