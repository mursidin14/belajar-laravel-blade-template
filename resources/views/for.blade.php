<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Loop</title>
</head>
<body>
    <h2>Foor Loop</h2>

   <ul>
        @for ($i = 0; $i <= $limit; $i++)
            <li>
                angka {{ $i }}
            </li>
        @endfor
   </ul>
</body>
</html>