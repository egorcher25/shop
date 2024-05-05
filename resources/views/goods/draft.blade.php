@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Список товаров</h3>
{{--                        <a href="{{ route('goods.create') }}" class="btn btn-primary float-right">Добавить товар</a>--}}
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Цена</th>
                                <th>Изображение</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($goods as $good)
                                <tr>
                                    <td>{{ $good->id }}</td>
                                    <td>{{ $good->name }}</td>
                                    <td>{{ $good->description }}</td>
                                    <td>{{ $good->price }}</td>
                                    <td><img src="{{ asset('storage/' . $good->image) }}" alt="{{ $good->name }}" class="img-thumbnail" style="max-width: 100px;"></td>
                                    <td>
{{--                                        <a href="{{ route('goods.show', $good->id) }}" class="btn btn-sm btn-primary">Просмотр</a>--}}
{{--                                        <a href="{{ route('goods.edit', $good->id) }}" class="btn btn-sm btn-warning">Редактировать</a>--}}
{{--                                        <form action="{{ route('goods.destroy', $good->id) }}" method="POST" style="display: inline-block;">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены, что хотите удалить этот товар?')">Удалить</button>--}}
{{--                                        </form>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $goods->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

