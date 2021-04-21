<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>! @yield('title') </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="#" class="navbar-brand">World Pokemon</a>
        <img height="50" width="50" class="rounded-circle" src="https://flyclipart.com/thumb2/pokeball-pokemon-ball-png-images-free-download-168596.png">

    </nav>
    <div class="container">
        @yield('Trainerlist')
        @yield('TrainerCreate')
        @yield('TrainerInfo')
    </div>
</body>
</html>
