<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hi ! this is news page</h1>
    <p>Now i am learing php {{$newsId}}</p>
    <hr>
    <h1>This is sport1</h1>
    <ul>
        @foreach($sports as $s)
        <li>{{$s}}</li>
        @endforeach
    </ul>
    <hr>
    <h1>This is sports2</h1>


    @if($show)
    <ul>
        @foreach($sports2 as $s)
        <li>{{$s['id']}} : {{$s['name']}}</li>
        @endforeach
    </ul>
    @endif


</body>

</html>