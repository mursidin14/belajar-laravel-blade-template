<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stack</title>
</head>
<body>
    @push('script')
        <p>selamat</p>
    @endpush
    @push('script')
        <p>datang</p>
    @endpush
    @prepend('script')
        <p>halo</p>
    @endprepend

    @stack('script')
</body>
</html>