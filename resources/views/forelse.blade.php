<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forelse</title>
</head>
<body>
    <h2>Forelse</h2>

    <ul>
        @forelse ($collection as $item)
            <li>
               my collections {{ $item }}
            </li>
        @empty
            I dont have any collections
        @endforelse
    </ul>
</body>
</html>