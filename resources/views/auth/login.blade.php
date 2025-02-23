@extends('layouts.app')

@section('title', 'Giriş Yap')

@section('content')
<div class="container my-5">
   <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center">Giriş Yap</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Posta</label>
                        <input type="email" name="email" placeholder="E-posta" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Şifre</label>
                        <input type="password" name="password" placeholder="Şifre" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
                </form>
            </div>
        </div>
    </div>
   </div>
</div>
@endsection
