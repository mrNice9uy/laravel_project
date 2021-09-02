@extends('layouts.app')
@section('content')
    <h1>Привет, {{ Auth::user()->name }}</h1>
    <br>
    <p>Это страница пользователя</p><br>
    <p><a href="{{ route('admin.index') }}">Перейти в админку</a></p>
@endsection
