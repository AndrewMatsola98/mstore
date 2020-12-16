@extends('auth.layouts.master')

@section('title', 'Продукт ' . $product->name)

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значення
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Назва</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Опис/td>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Категорія</td>
                <td>{{ $product->category->name }}</td>
            </tr>
                <tr>
                    <td>Лейбли</td>
                    <td>
                        @if($product->isNew())
                            <span class="badge badge-success">Новинка</span>
                        @endif

                        @if($product->isRecommend())
                            <span class="badge badge-warning">Рекомендуємо</span>
                        @endif

                        @if($product->isHit())
                            <span class="badge badge-danger">Хіт продажу!</span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
