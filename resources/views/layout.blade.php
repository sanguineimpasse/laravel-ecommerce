<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <style>
        a{
            text-decoration: none;
        }
        .card-text{
            height: 20vh;
            overflow-y: auto;
        }
        .card:hover{
            cursor: pointer;
            box-shadow: 4px 4px 16px rgba(0,0,0,0.15);
            transition:box-shadow 0.2s ease;
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