<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <h2>Benvenuto {{ $name }} {{ $lastname }}</h2>
    <h3>I compagni di classe sono: </h3>
    @foreach($students as $student)


        <p>{{ $student }}</p>
        @if(!$loop->last)
        -
        @endif

    @endforeach
</body>
</html>