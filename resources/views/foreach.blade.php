<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach</title>
</head>
<body>
    <h2>Foreach</h2>

    <ul>
        @foreach ($collection as $item)
            <li>
                my collections {{ $item }}
            </li>
        @endforeach
    </ul>
</body>
</html>