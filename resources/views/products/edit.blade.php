@extends('layout')

@section('content')

<h1 class="my-5">Editing a product</h1>

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

<div class="my-5">
    <form action="{{ route('update_product', $product->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ $product->name }}">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="image" id="image" placeholder="image" value="{{ $product->image }}">
            <label for="image">Image</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="desc" id="desc" placeholder="description" value="{{ $product->desc }}">
            <label for="desc">Description</label>
        </div>
        <button type="submit" class="btn btn-success mb-3">Save Changes</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Cancel</a>
    </form>
    <form action="{{ route('delete_product', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mb-3">Delete Product</button>
    </form>
</div>
@endsection