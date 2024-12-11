<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>We love cats</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="cont">
    <div class='navbar navbar-expand-lg bg-body-tertiary header'>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill%2Cf_auto%2Ch_768%2Cw_1024/v1430985624/icxwaqislsihjy4b02yl.jpg" alt="Logo"  class="item d-inline-block align-text-top logo">
                I love cat's
            </a>
            @auth
            <button class="button-search btn  button-upload" type="button" data-bs-toggle="modal" data-bs-target="#ModalCreate  ">Search</button>
            @endauth
            @guest
                <a class="button-search btn  button-upload" href="/login">Log in</a>
            @endguest
            <div class="toast-container position-fixed bottom-0 end-0 p-3">

            </div>
        </div>
    </div>
</div>
<div class="container text-center">
@yield('body')
</div>
<footer class="footer">
    <div class="footer-item">
        <div class="footer-left">
            <div>
                <p class="author">Жилин Андрей</p>
            </div>
        </div>
    </div>
    <div class="footer-item">
        <div class="footer-right">
            <div class="icons">
                <a href="https://web.telegram.org/SideArket"><img class="icon-image" alt="Andrey Zhilin"
                                                                  src="https://cdn1.iconfinder.com/data/icons/unicons-line-vol-6/24/telegram-1024.png"></a>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>


</html>
