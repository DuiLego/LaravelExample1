<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact 1</h1>
    <h1>{{ $name }}</h1>

    @if ($name != "Cesara")
        Tu nombre no es César
    @endif

    <ul>
        @foreach ([1, 2, 3, 4, 5] as $item)
            <li>{{ $item}}</li>
        @endforeach
    </ul>
</body>
</html>