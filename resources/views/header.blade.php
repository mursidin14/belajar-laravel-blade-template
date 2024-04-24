<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
</head>
<body>
    @isset($title)
        <h2>Welcome {{ $title }}</h2>
    @else
        <h2>Welcome anyone</h2>
    @endisset

    @isset($desc)
        <h2>{{ $desc }}</h2>
    @endisset

</body>
</html>