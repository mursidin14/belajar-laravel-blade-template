<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Stetment</title>
</head>
<body>
    <h2>kondisi</h2>

    @if(count($hobbies) == 1)
        I have one hobby!
    @elseif(count($hobbies) > 1)
        I have multiple hobbies!
    @else
        I dont have any hobbies!
    @endif
</body>
</html>