<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disabled Template</title>
</head>
<body>
    {{-- So, ketika ingin mengabaikan suatu code dari blade-template harus menyisipkan simbol '@', dan ketika ingin mengabaikan beberapa baris code pada blade-template, agar tidak menyisipkan simbol '@' secara berulang makan bisa langus menggunakan tag '@verbatim @endverbatim' --}}

    {{-- Contoh: --}}
    <h2>hello @{{ $mursidin }}</h2>

    @verbatim
        <p>@{{ $mursidin }}</p>
        <p>@{{ $mursidin }}</p>
        <p>@{{ $mursidin }}</p>
    @endverbatim
</body>
</html>