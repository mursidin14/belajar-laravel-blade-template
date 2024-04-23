<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siwtch</title>
</head>
<body>
    <h2>Switch Case</h2>

    @switch($value)
        @case('A')
            Memuaskan
        @break
        @case('B')
            Baik
        @break
        @case('C')
            Cukup
        @break
        @default
            Kurang
    @endswitch
</body>
</html>