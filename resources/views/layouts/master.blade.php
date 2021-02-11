<!doctype html>
<html lang="de">
<head>

    <title>@yield('title') - sae-laravel</title>

    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    @include('partials.navbar')

    <div class="container">

        @include('partials.alerts')

        @yield('container')

    </div>

</body>
</html>
