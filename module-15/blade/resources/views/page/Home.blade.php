@extends('layout.app')

@section('content')

@include('compoents.slide')
@include('compoents.pricing')
@include('compoents.faq')
@include('compoents.tost')
@include('compoents.card')
@include('compoents.contace')

@endsection













{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/style.css')}}">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--<div>--}}

{{--    <button type="button" class="btn btn-primary">Primary</button>--}}
{{--</div>--}}

{{--<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>--}}
{{--</body>--}}
{{--</html>--}}













{{--<body>--}}
{{--<ul>--}}
{{--    @foreach($users as $eachUser)--}}
{{--        <li>--}}
{{--            User Name Is={{$eachUser['name']}} and city name ={{$eachUser['city']}}--}}
{{--        </li>--}}


{{--    @endforeach--}}
{{--</ul>--}}
{{--<ul>--}}
{{--@for($i=0;$i<100;$i=$i+1)--}}
{{--    <li>--}}
{{--        {{$i}}--}}
{{--    </li>--}}
{{--</ul>--}}
{{--@endfor--}}
{{--</body>--}}



{{--<h1>{{$result}}</h1>--}}



{{--@if($result<100)--}}
{{--    <h1>Result is Hundead</h1>--}}

{{--@elseif($result==1000)--}}
{{--    <h1>Result is thusand</h1>--}}

{{--@elseif($result==100000)--}}
{{--    <h1>Result is lak</h1>--}}

{{--@else--}}
{{--    <h1>Result is not our range</h1>--}}

{{--@endif--}}

{{--@switch($result)--}}
{{--    @case(100)--}}
{{--    <h1>Result is Hundead</h1>--}}
{{--    @case(1000)--}}
{{--    <h1>Result is thusand</h1>--}}
{{--    @case(100000)--}}
{{--    <h1>Result is lak</h1>--}}
{{--    @break--}}
{{--    @default--}}
{{--    <h1>Result is not our range</h1>--}}

{{--@endswitch--}}
