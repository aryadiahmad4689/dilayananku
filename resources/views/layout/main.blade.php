<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layout.partial.link')
    <title>Dilayananku</title>
</head>
<body>
    @include('layout.partial.header')

    @yield('content')

    @include('layout.partial.footer')

    @yield('script2')

    @include('layout.partial.script')
</body>
</html>
