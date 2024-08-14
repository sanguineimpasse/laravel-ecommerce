@extends('layout')

@section('content')
    <div class="container my-5">
        <div class="row align-items-start">
            <div class="col-4 gap-3">
                <div class="row">
                    <img class="userimg w-75" src="{{ asset('img/cat.jpg') }}">
                    <div class="btn btn-secondary my-3 w-75">
                        Change profile picture
                    </div>
                    <div class="my-5"></div>
                    <div class="btn btn-success my-1 w-75">
                        <a href="/dashboard">Save profile changes</a>
                    </div>
                    <div class="btn btn-danger my-1 w-75">
                        <a href="/dashboard">Discard all changes</a>
                    </div>
                </div>
            </div>
            <div class="col-8">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="username" value="{{ $username }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ $email }}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Describe yourself</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize:none"></textarea>
            </div>
            </div>
        </div>
    </div>
@endsection