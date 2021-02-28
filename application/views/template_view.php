<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <div class="container-xxl">
            <a class="navbar-brand" href="/">Менеджер задач</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/task/add">Новая задача</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Сортировать
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" style="background-color: #0d6efd;"
                            aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/?sort=login&sort_type=asc">По имени от А до Я</a></li>
                            <li><a class="dropdown-item" href="/?sort=login&sort_type=desc">По имени от Я до А</a></li>
                            <li><a class="dropdown-item" href="/?sort=email&sort_type=asc">По email от А до Я</a></li>
                            <li><a class="dropdown-item" href="/?sort=email&sort_type=desc">По email от Я до А</a></li>
                            <li><a class="dropdown-item" href="/?sort=performed&sort_type=asc">По статусу сначала выполненные</a></li>
                            <li><a class="dropdown-item" href="/?sort=performed&sort_type=desc">По статусу сначала не выполненные</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Войти</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php include 'application/views/' . $content_view; ?>

<footer class="bg-primary text-white pt-4 pb-4 footer fixed-bottom">
    <div class="container-xxl">
        <div class="row">
            <div class="col">
                e-mail: romaaverkin@gmail.com
            </div>
            <div class="col float-right text-end">
                © 2021 Аверкин Роман
            </div>
        </div>
    </div>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>