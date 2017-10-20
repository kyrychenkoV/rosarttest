<!doctype html>
<html lang="ru">
<head>
    @include('frontend.layouts.head')
</head>
<body class="topPadidng">
    @include('frontend.layouts.header_app')

    @section('main-content')
    @show

    @include('frontend.layouts.footer')
    @include('frontend.layouts.dialog')
</body>
</html>