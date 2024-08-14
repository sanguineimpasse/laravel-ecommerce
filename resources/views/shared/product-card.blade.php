@foreach ( json_decode($products) as $product )
<div class="col my-2">
    <div class="card">
        <img src="{{ asset($product->image) }}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">
                {{ $product->desc ?? 'no description available' }}
            </p>
            <a href="#" class="btn btn-primary">ADD TO CART</a>
        </div>
    </div>
</div>
@endforeach