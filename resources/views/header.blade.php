<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OnlineGaming-Market</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
</head>

<div class="container header-container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="{{ asset('img/logo.svg') }}" width="60"/>
        </a>

        <div class="col-md-3 header-buttons">
            <a href="{{ route('register') }}" id="registerButton">Sign up</a>
            <a href="{{ route('login') }}" id="loginButton">Login</a>
        </div>
    </header>
</div>
