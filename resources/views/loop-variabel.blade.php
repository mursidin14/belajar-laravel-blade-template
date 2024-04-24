<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop Variabel</title>
</head>
<body>
    <h2>Loop Variabel</h2>

    <ul>
        @foreach ($hobbies as $hobby)
            <li>
                {{ $loop->iteration }}. {{ $hobby }}
            </li>
        @endforeach
    </ul>
</body>
</html>