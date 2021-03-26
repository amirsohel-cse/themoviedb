<!DOCTYPE html>
<html lang="en">
<head>
    <title>Themoviedb </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>TheMovieDB</h1>
    <p>API integration</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Movie Categories</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse col-sm-12" id="collapsibleNavbar">
        <ul class="navbar-nav">
            @foreach ($genres as $genre)
            <li class="nav-item">
                <a class="nav-link" href="{{url('movies/'.$genre['id'].'/genres')}}">{{$genre['name']}}</a>
            </li>
            @endforeach

        </ul>
    </div>
</nav>

<div class="container" style="margin-top:30px">
    <h4>Movie List for selected category</h4>
    <br>
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="Card image cap" >
                <div class="card-body">
                    <p class="card-text">{{$movie['title']}}</p>
                </div>
            </div>
        </div>
            @endforeach
    </div>
</div>



</body>
</html>
