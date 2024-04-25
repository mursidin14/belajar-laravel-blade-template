<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inheretense</title>
</head>
<body>
    <h2>child @yield('title')</h2>

    <div class="main">
        <div class="container">
            @section('header')
                <h1>Selamat Datang</h1>
            @show
        </div>
        <div class="section">
            @section('content')
                <h3>Content</h3>
            @show
        </div>
    </div>
</body>
</html>