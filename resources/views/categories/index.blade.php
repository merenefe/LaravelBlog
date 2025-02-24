@extends('layouts.app')

@section('title', 'Kategoriler')

@section('content')
    <div class="container">
        <h3>Kategoriler</h3>

        @auth
            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Yeni Kategori Ekle</a>
        @endauth

        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $category->name }}</span>
                            @auth
                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="btn btn-sm btn-warning text-white">Düzenle</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Bu kategoriyi silmek istediğinizden emin misiniz?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                                </form>
                            @endauth
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
