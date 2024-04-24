<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Css</title>

    <style>
        .red {
            color: red;
        }
        .italic {
            font-style: italic;
        }
    </style>
</head>
<body>
    <h2>Class Css</h2>

    <ul>
        @foreach ($hobbies as $hobby)
            <li @class(['red', 'italic' => $hobby["ganjil"]])>{{ $hobby['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>