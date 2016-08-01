<!doctype html>
<html lang="en">
<head>
    <title>Laravel User Interface</title>

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
</head>
<body>

<div id="wrapper">
    <div class="header">
        @if (session('lui'))
            @include('lui::includes.auth_header')
        @else
            @include('lui::includes.guest_header')
        @endif
    </div>

    @yield('lui::content')

    @include('lui::includes.footer')

</div>
</body>
</html>