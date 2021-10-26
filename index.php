<!DOCTYPE html>
<html>
<head>
	<title>GameCHU</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/
css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">GameCHU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="playnow.php">Play Now!!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="paststreams.php">Past Streams</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="news.php">News</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Links
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Discord</a>
          <a class="dropdown-item" href="#">YouTube</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Threads</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">v0.53(beta)</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>	
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/thumbnail1.png" alt="Live Stream" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Live Stream</h3>
        <p>Baba ka mahal!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/thumbnail2.png" alt="Live Stream 1" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Live Stream</h3>
        <p>restarting smp!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/thumbnail3.png" alt="Live Stream 3" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Live Stream</h3>
        <p>Official SMP!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="my-2">
    <h2 class="text-center">About Website </h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/gclogo.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <p class="py-3">Abhi tk nhi likha. </p>
      <a href="about.php" class="btn button">Read More...</a>
  </div>
</div>  
</section>

<section class="my-5">
  <div class="my-2">
    <h2 class="text-center">Past Live Streams </h2>
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      
    </div>
  </div>
</div>

</section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>