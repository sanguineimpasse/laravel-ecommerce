@extends('layout')

@section('content')
    <div class="container my-5">

        <div class="row row-cols-4"> <!-- grid container -->
            @include('shared.product-card')

        </div>

    </div>
@endsection