<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">Новинка</span>
            @endif

            @if($product->isRecommend())
                <span class="badge badge-warning">Рекомендуємо</span>
            @endif

            @if($product->isHit())
                <span class="badge badge-danger">Хіт продажу!</span>
            @endif

        </div>
        <img src="{{ Storage:: url($product->image) }}" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} грн.</p>
            <p>
            <form action="{{route('basket-add', $product) }}" method="POST">
                @if($product->isAvailable())
                    <button type="submit" class="btn btn-primary" role="button">Добавити в корзину</button>
                @else
                    Не доступний
                @endif
                <a href="{{route('product', [isset($category) ? $category->code : $product->category->code, $product->code])}}"
                   class="btn btn-default"
                   role="button">Детальніше</a>
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>
