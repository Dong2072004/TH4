<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Thêm Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header>
    <h2>TRANG QUẢN LÝ THƯ VIỆN</h2>
    <h3>@yield('title')</h3>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Trang quản lý sách</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('readers.index') }}">Trang quản lý người đọc</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('borrows.index') }}">Trang quản lý mượn sách</a>
        </li>
    </ul>
</header>

<main>
    @yield('main')
</main>

<footer>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <p class="nav-link active">Đây là footer</p>
        </li>

    </ul>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
