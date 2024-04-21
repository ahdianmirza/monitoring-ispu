<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('include.style')

    <title>
        @yield('title')
    </title>

</head>

<body class="g-sidenav-show  bg-gray-200">

    @include('include.sidebar')

    @yield('content')

    @include('include.script')

</body>

</html>
