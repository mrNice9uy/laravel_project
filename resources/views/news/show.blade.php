@extends('layouts.main')
@section('title') Новость с id = {{ $id }} @parent @stop
@section('slug') @parent @stop
@section('content')
<h2>Новость с id = {{ $id }}</h2>
@endsection
