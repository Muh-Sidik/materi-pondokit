<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>My Portfolio</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- <link href="css/styleku.css" rel="stylesheet"> -->
  <style>
    section {
      min-height: 420px;
    }
  </style>
</head>

<body class="mt-4">

<!--Navbar -->
<nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark info-color">
  <div class="container">
  <a class="navbar-brand" href="#">Muhammad Sidik</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
        aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item avatar">
            <a class="nav-link p-0" href="#">
              <img src="{{asset('img/2.jpg')}}" class="rounded-circle z-depth-0"
                alt="avatar image" height="35">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--/.Navbar -->

<!-- Jumbotron -->
<div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-5">
    <div class="py-5">

      <!-- Content -->
      <img src="{{ asset('img/1.jpeg') }}" width="22%" class="rounded-circle img-thumbnail animated slideInDown">
          <h1 class="animated fadeIn slow">Muhammad Sidik</h1>
          <h2 class="animated fadeIn slow"> | Full Stack Developer | </h2>
          <hr>
          <p>Php | JavaScript | Python | GO | Bootstrap | MdBootstrap | Laravel | CodeIgniter</p>
      

    </div>
  </div>
</div>
<!-- Jumbotron -->

<!-- About -->
  <!-- judul -->
<section id="about" class="about mt-4">
<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
        <h2>About</h2>
      </div>
    </div>
  <!-- desc1 -->
    <div class="row justify-content-center">
      <div class="col-md-5 text-justify">
        <p>Maka bersabarlah engkau, sesungguhnya janji Allah itu benar, meskipun Kami perlihatkan kepadamu sebagian siksa yang Kami ancamkan kepada mereka, ataupun Kami wafatkan engkau (sebelum ajal menimpa mereka). Namun kepada Kamilah mereka dikembalikan. – (Q.S Ghafir: 77).</p>
      </div>
    
    <!-- desc desc2 -->
      <div class="col-md-5 text-justify">
        <p>Barangsiapa menyangka bahwa Allah tidak akan menolongnya di dunia dan di akhirat, maka hendaklah dia merentangkan tali ke langit-langit, lalu menggantung (diri), kemudian pikirkanlah apakah tipu dayanya itu mampu melenyapkan apa yang menyakitkan hatinya. – (Q.S Al-Hajj: 15).</p>
      </div>
    </div>
</div>
</section>

<!-- Akhir About -->

<!-- portfolio -->
<section id="portfolio" class="portfolio bg-light pb-4">
<div class="container">
  <div class="row mb-4 pt-4">
    <div class="col text-center">
      <h2>Portfolio</h2>
    </div>
  </div>
  <!-- baris pertama -->
  <div class="row mb-4">
    <div class="col-md">
      <div class="card">
        <img src="{{asset('img/2.jpg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <div class="col-md">
      <div class="card">
        <img src="{{asset('img/1.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <div class="col-md">
      <div class="card">
        <img src="{{asset('img/3.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- baris kedua -->
  <div class="row mb-4">
  <div class="col-md">
      <div class="card">
        <img src="{{asset('img/4.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <div class="col-md">
      <div class="card">
        <img src="{{asset('img/5.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    
    <div class="col-md">
      <div class="card">
        <img src="{{('img/6.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- akhir portfolio -->

<!-- contact -->

<section id="contact" class="contact">
<div class="container">
  <div class="row pb-4 mb-4">
    <div class="col text-center">
      <h2>Contact Us</h2>

    </div>
  </div>
</div>
<section>

<!-- akhir contact -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
</body>

</html>
