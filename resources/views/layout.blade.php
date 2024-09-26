<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECommerce</title>
    <style>
        a{
            text-decoration: none;
        }
        .card-text{
            height: 20vh;
            overflow-y: auto;
        }
        .card{
            transition: 0.3s;
        }
        .card:hover{
            cursor: pointer;
            box-shadow: 0px 4px 8px rgba(0,0,0, 0.15);
        }
    </style>
    @vite('resources/sass/app.scss', 'resources/js/app.js')
</head>
<body>
    <div>
        @include('shared.nav')
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>