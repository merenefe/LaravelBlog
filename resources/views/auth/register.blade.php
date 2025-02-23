@extends('layouts.app')

@section('title', 'Kayıt Ol')


@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">Kayıt ol</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Adınız</label>
                            <input type="text" name="name" placeholder="Adınız" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-Posta</label>
                            <input type="email" name="email" placeholder="E-posta" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Şifre</label>
                            <input type="password" name="password" placeholder="Şifre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Şifre (Tekrar)</label>
                            <input type="password" name="password_confirmation" placeholder="Şifre (Tekrar)" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kayıt Ol</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
