@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>Ціна: <b>{{ $product->price }} грн.</b></p>
    <img src="{{ Storage::url($product->image) }}">
    <p>{{ $product->description }}</p>

        @if($product->isAvailable())
            <form action="{{ route('basket-add', $product) }}" method="POST">
                <button type="submit" class="btn btn-success" role="button">Добавити у корзину</button>

                @csrf
            </form>
        @else

            <span>Немає в наявності</span>
            <br>
            <span>Повідомити мене, коли товар буде в наявності:</span>
           <div class="warning">
                @if($errors->get('email'))
                {!! $errors->get('email')[0] !!}
               @endif
           </div>

            <form method="POST" action="{{ route('subscription', $product) }}">
                @csrf
                <input type="text" name="email"></input>
                <button type="submit"> Відправити</button>
            </form>
        @endif

@endsection
