@extends('layouts.app')

@section('title', 'Yazıyı Düzenle')

@section('content')
<div class="container">
    <h3 class="text-center mb-4">Yazıyı Düzenle</h3>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Başlık</label>
                    <input type="text" name="title" value="{{ old('title', $post->title) }}" placeholder="Başlık" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">İçerik</label>
                    <textarea name="content" placeholder="İçerik" class="form-control"> {{ old('content', $post->content) }} </textarea>
                </div>
                <div class="mb-3">
                    <label for="categories" class="form-label">Kategoriler</label>
                    <select name="categories[]" class="form-control" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ in_array($category->id, $post->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </form>
        </div>
    </div>
</div>
@endsection

