@extends('layout')

@section('content')
<h1 class="my-5">Adding a product</h1>

@if($errors -> any())
<div class="my-5 p-4 rounded bg-danger-subtle">
    <h1 class="text-danger">You have invalid inputs:</h1>
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-danger" style="list-style-position:outside">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('store_product') }}" method="POST">
<!-- action="/product/store" method="POST" -->
    @csrf
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
        <button type="submit" class="btn btn-success mb-3">Add Product</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Cancel</a>
    </div>
</form>
@endsection