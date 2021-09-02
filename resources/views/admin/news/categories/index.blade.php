@extends('layouts.admin')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Категории</h1>
        <a href="{{ route('admin.categories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить новую</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        @include('inc.message')
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#ID&nbsp;<a href="?sort=desc">ds</a> &nbsp; <a href="?sort=asc">as</a></th>
                        <th>Заголовок</th>
                        <th>Текст</th>
                        <th>Управление</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}" style="font-size: 12px">Edit</a> &nbsp;
                                <a href="javascript:;" rel="{{ $category->id }}" class="delete" style="font-size: 12px; color: red">Del.</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Записей нет</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $categories->links() }}
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(function () {
            $(".delete").on('click', function () {
                var id = $(this).attr('rel');
                if(confirm("Подтверждаете удаление записи с ID #" + id + " ?")) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "DELETE",
                        url: "/admin/news/" + id,
                        dataType: 'json',
                        success: function(response) {
                            alert("Запись была удалена");
                            location.reload();
                        }
                    });
                }
            })
        })
    </script>
@endpush
