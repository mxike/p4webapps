<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebApps Forum</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
</head>
<body>
@include('layouts.partials.nav')

<div class="container">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hWnYaiADRT02PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>