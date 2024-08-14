<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand bg-dark sticky-top shadow">
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="/dashboard">
                    <span class="navbar-brand mb-0 h1 text-light">
                        {{ config('app.name')}}
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard" class="text-light mx-3">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('create_product')}}" class="text-light mx-3">
                    Add a product
                </a>
            </li>
        </ul>
        <a href="/profile" class="text-light mx-3">
            username
        </a>
    </nav>
</body>
</html>