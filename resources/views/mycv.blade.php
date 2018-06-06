<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Info</title>
</head>
<body>
<div class="container">
    <div class="jumbotron mt-3">
        <h1>{{ $data['name'] }}</h1>
        <p class="lead">Birth : {{ $data['birth'] }}</p>
        <p class="lead"> Address : {{ $data['address'] }}</p>
        <p class="lead">School : {{ $data['school'] }}</p>
    </div>
</div>
</body>
</html>