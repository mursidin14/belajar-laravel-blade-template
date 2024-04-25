<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Atribute</title>
</head>
<body>
    <input type="checkbox" {{ $user['premium'] ? 'checked' : '' }} value="Premium"> <br>
    <input type="text" value="{{ $user['name'] }}" {{ !$user['admin'] ? 'readonly' : '' }}> <br>

</body>
</html>