<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" href="{{asset('storage/public/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css')  }}">
    <title>Bella CMS</title>
</head>
<body>
<main>
    @yield('content')
</main>
<script src="{{ asset('js/jQuery.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>