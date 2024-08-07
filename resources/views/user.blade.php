<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <style>
        .userimg{
            border-radius: 100%;
        }
        a{
            color: white;
            text-decoration: none;
        }
    </style>
    @vite('resources/sass/app.scss', 'resources/js/app.js')
</head>
<body>
    <div class="container my-5">
        <div class="row align-items-start">
            <div class="col-4 gap-3">
                <div class="row">
                    <img class="userimg w-75" src="{{ asset('img/cat.jpg') }}">
                    <div class="btn btn-primary my-3 w-75">
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
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="username">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Describe yourself</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize:none"></textarea>
            </div>
            </div>
        </div>
    </div>
</body>
</html>