@extends('layout')

@section('content')
    <form action="{{ route('store_product') }}" method="POST">
        @csrf
     <!-- action="/product/store" method="POST" -->
        <div class="my-5">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="image" id="image" placeholder="image">
                <label for="image">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="desc" id="desc" placeholder="description">
                <label for="desc">Description</label>
            </div>
            <button type="submit" class="btn btn-success">Create Product</button>
        </div>
    </form>
@endsection