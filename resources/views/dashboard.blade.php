@extends('layouts.app')

@section('title', 'Yönetim paneli')

@section('content')
    <h1>Hoş geldiniz, {{ auth()->user()->name }}!</h1>
@endsection
