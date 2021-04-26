<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>! @yield('title') </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
         .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="{{ url('/trainers') }}" class="navbar-brand">World Pokemon</a>
    
        <a href="../trainers/create" class=" btn-floating">        <img height="50" width="50" class="rounded-circle" src="https://flyclipart.com/thumb2/pokeball-pokemon-ball-png-images-free-download-168596.png">
        </a>

    </nav>
    <div class="container">
        @yield('Trainerlist')
        @yield('TrainerCreate')
        @yield('TrainerInfo')
        @yield('TrainerEdit')
    </div>
</body>
</html>
