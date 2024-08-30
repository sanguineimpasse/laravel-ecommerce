@forelse ( $products as $product )
<div class="col my-2">
    <div class="card">
        <img src="{{ asset($product->image) }}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">
                {{ $product->desc ?? 'no description available' }}
            </p>
            <a href="{{ route('edit_product', $product->id) }}" class="btn btn-secondary">Edit Product</a>
        </div>
    </div>
</div>
@empty
<h1 class="w-100 text-center">There are no products... yet.</h1>
<h4 class="w-100 text-center">You can add one by clicking the "Add Products" button.</h4>
@endforelse