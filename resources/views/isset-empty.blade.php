<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isset-Empty</title>
</head>
<body>
    <h2>Isset-Empty</h2>
    {{-- fungsi ini di gunakan mengecek apakah variabel tersebut bernilai null atau tidak, jika tidak bernilai null makan simbol codenya @isset di ikuti nama variabel, jika bernilai null maka cukup dengan @empty --}}

    {{-- contoh --}}
    @isset($name)
        hello my name is {{ $name }}
    @endisset

    @empty($hobbies)
        I dont have any hobbies!
    @endempty
</body>
</html>