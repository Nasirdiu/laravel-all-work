<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/c60a7f43c5.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

@include('layout.header')

@yield('content')

@include('layout.footer')

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

