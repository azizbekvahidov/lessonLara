<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{ route("admin.index") }}">Asosiy</a></li>
            <li><a href="{{ route("admin.product.index") }}">product</a></li>
            <li><a href="">ikki</a></li>
            <li><a href="">uch</a></li>
        </ul>
    </header>
    <main>
        <div id="container">
            @yield("content")
        </div>
    </main>
    <footer>
        footer
    </footer>
</body>
</html>
