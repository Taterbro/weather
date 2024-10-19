<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('main.css')}}" />
    <title>Weather</title>
</head>
<body>
    <h1>Weather</h1>
    <h2>{{$city}}</h2>
    <img src="http://openweathermap.org/img/w/<?php echo $icon; ?>.png" alt="weatherIcon">
    <h2>{{$sumry}}</h2>
    <p>{{$description}}</p>
    @vite(['resources/js/bootstrap.js'])
</body>
</html>