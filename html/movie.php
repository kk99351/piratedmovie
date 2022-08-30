<?php
include "host.php";
if (isset($_REQUEST['search_query'])){
    $search_array = explode(" ",$_REQUEST['search_query']);
    $query = "SELECT id, name, poster_img  FROM movie_details WHERE";
    foreach ($search_array as $values){
        if ($search_array[0] == $values){
            $query = $query." name LIKE '%$values%'";
        }
        else{
            $query = $query." OR name LIKE '%$values%'";
        }
        $query = $query.' ORDER BY views DESC LIMIT 4';
    }
}
else if (isset($_REQUEST['genere'])){

}
else if (isset($_REQUEST['category'])){

}
else if (isset($_REQUEST['imdb'])){

}
else{
    header('Location: '.'localhost');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="index.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index2.css">
    <link rel="stylesheet" href="index3.css">
    <link rel="stylesheet" href="index4.css">
</head>

<body>
    <section id="title">
        <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                arial-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href=""><img width="50" src="logo1.png"><img width="200" src="logo2.png"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">18+</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Anime</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BOLLYWOOD
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">All Bollywood</a>
                          <a class="dropdown-item" href="#">A to Z Bollywood</a>
                          <a class="dropdown-item" href="#">Year-Wise</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            HOLLYWOOD
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">All Hollywood</a>
                            <a class="dropdown-item" href="#">A to Z Hollywood</a>
                            <a class="dropdown-item" href="#">Year-Wise</a>
                          </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CATEGORY
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">TV Web Series</a>
                          <a class="dropdown-item" href="#">South Indian Movies</a>
                          <a class="dropdown-item" href="#">Assamese Movies</a>
                          <a class="dropdown-item" href="#">Bengali Movies</a>
                          <a class="dropdown-item" href="#">Gujarati Movies</a>
                          <a class="dropdown-item" href="#">Punjabi Movies</a>
                          <a class="dropdown-item" href="#">Bhojpuri Movies</a>
                          <a class="dropdown-item" href="#">Marathi Movies</a>
                          <a class="dropdown-item" href="#">Nepali Movies</a>
                          <a class="dropdown-item" href="#">Odia Movies</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            GENERE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Action & Adventure</a>
                          <a class="dropdown-item" href="#">Animation</a>
                          <a class="dropdown-item" href="#">Bold</a>
                          <a class="dropdown-item" href="#">Comedy</a>
                          <a class="dropdown-item" href="#">Cookery</a>
                          <a class="dropdown-item" href="#">Crime</a>
                          <a class="dropdown-item" href="#">Erotic</a>
                          <a class="dropdown-item" href="#">Family</a>
                          <a class="dropdown-item" href="#">Fantasy</a>
                          <a class="dropdown-item" href="#">History</a>
                          <a class="dropdown-item" href="#">Horror</a>
                          <a class="dropdown-item" href="#">Kids</a>
                          <a class="dropdown-item" href="#">Music</a>
                          <a class="dropdown-item" href="#">Mystery</a>
                          <a class="dropdown-item" href="#">Reality</a>
                          <a class="dropdown-item" href="#">Rommance</a>
                          <a class="dropdown-item" href="#">Sci-Fi</a>
                          <a class="dropdown-item" href="#">Sci-Fi & Fantasy</a>
                          <a class="dropdown-item" href="#">Sports</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: #fbc93b;">TOP IMDB</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="movie.php">
                    <div>
                        <input class="form-control mr-sm-2" id="searchquerybox" onkeyup="searchquery(this.value)" type="search" placeholder="Search" aria-label="Search">
                        <div id="search_box">
                        </div>
                    </div>
                    <button class="btn btn-outline-success my-2 my-sm-0" disabled id="search_bt" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </section>
    <section id="notice">
        <p>
            Latest Updates...
        </p>
    </section>
    <section id="main_content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <ul style="display: flex;flex-direction: row;flex-wrap: wrap;list-style-type: none;">
                    <li class="context">BollyWood Movies</li>
                </ul>
            </div>
        </div>
        <div class="row mv_content">
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
            <div class="col-lg-2 col-md-4 col-6 movie_card">
                <div class="image_text">
                    Raksha Bandhan 2022 Hindi Movie PreDvd V2 480p 720p 1080p
                </div>
                <img src="raksha.jpg" class="poster">
            </div>
        </div>
        </div>
    </section>
    <footer id="footer">
        <p>moviedukaan.com © 2022</p>
        <p>Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated
            third parties.</p>
    </footer>
</body>

</html>