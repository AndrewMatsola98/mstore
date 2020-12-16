@extends('layouts.master')

@section('title', 'Оформити замовлення')

@section('content')
        <h1>Будь ласка, підтвердіть заказ:</h1>
        <div class="container">
            <div class="row justify-content-center">
                <p>Загальна вартість: <b>{{$order->calculateFullSum()}} грн.</b></p>
                <form action="{{ route('basket-confirm') }}" method="POST">
                    <div>
                        <p>Вкажіть свої контактні дані, щоб ми могли зв'язатись з вами:</p>

                        <div class="container">
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Ім'я: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер телефону: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="phone" id="phone" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                        @guest
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="email" id="email" value="" class="form-control">
                                </div>
                            </div>
                            @endguest
                        </div>
                        <br>
                            @csrf
                            <input type="submit" class="btn btn-success" value="Підтвердіть замовлення">
                    </div>
                </form>
            </div>
        </div>
@endsection
