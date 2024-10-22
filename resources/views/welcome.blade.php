<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('main.css')}}" />
    <title>Weather</title>
</head>
<body>
    <h1>Weather</h1>
    <h2 id="weather"></h2>
    <img alt="weatherIcon" id="icon">
    <h2 id="desc"></h2>
    <p id="city"></p>
    @vite(['resources/js/bootstrap.js'])
</body>
</html>