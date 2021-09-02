@extends('layouts.admin')

@section('content')
    <h2>Test</h2>
    <div class="col-12">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
    </div>
    <!-- Content Row -->
    <div class="row">
        <form method="post" action="{{ route('admin.user.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="number" class="form-control" name="phone" id="phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="comment">Комментарий</label>
                <input type="text" class="form-control" name="comment" id="comment">
            </div>
            <br>
            <button class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
