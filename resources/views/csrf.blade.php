<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF</title>
</head>
<body>
    <h2>CSRF</h2>

    <form action="" method="post">
        @csrf
        <input type="text" name="name"><br>
        <input type="submit" name="submit"><br>
    </form>
</body>
</html>