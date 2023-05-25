<h1>{{$result}}</h1>

@if($result<100)
    <h1>Result is Hundead</h1>

@elseif($result==1000)
    <h1>Result is thusand</h1>

@elseif($result==100000)
    <h1>Result is lak</h1>

@else
    <h1>Result is not our range</h1>

@endif
