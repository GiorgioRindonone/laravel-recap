<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($inutile as $student)
       
        <li>
            {{$student->name}}
            {{$student->lastname}}
            <img src="{{$student->image}}" alt="">
        </li>
    
        @endforeach


    </ul>
    
</body>
</html>