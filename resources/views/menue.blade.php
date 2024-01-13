
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

 
<style>
  .navbar-expand-lg .navbar-collapse {
    justify-content: flex-end !important;
}
</style>
  
  <img src="{{ asset('images/ab.jpg') }}"  alt="...">

  <br>
  <br>
  <br>
  <body class="hero-anime">	


            
       </nav>		
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" >
      <ul class="navbar-nav" >
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/accueil') }}">ACCUEIL</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">
          QUI SOMMES-NOUS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="mission" >Notre Mission</a></li>
            <li><a class="dropdown-item" href="president">Mot du président</a></li>
            <li><a class="dropdown-item" href="accueil">Comité d'organisation</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          CONGRES 2023
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cong">Théme </a></li>
            <li><a class="dropdown-item" href="accueil#congre">Congrés 2021</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accueil#prog">PROGRAMME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription">INSCRIPTION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accueil#contact">CONTACTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/log') }}">MON COMPTE</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <!-- Image 1 -->
    <div class="col-md-6 order-md-1 order-2">
      <img src="{{ asset('images/c.jpg') }}" alt="Image 1" class="img-fluid">
    </div>

    <!-- Image 2 -->
    <div class="col-md-6 order-md-2 order-1">
      <img src="{{ asset('images/d.jpg') }}" alt="Image 2" class="img-fluid">
    </div>
  </div>
</div>
<br>
<br>
@section('content')
    
<div class="alert alert-primary" role="alert" style="text-align: center;">
<h5 >  NOUS SOMMES SUR LES RÉSEAUX SOCIAUX</h5>
<div class="container" >
  <div class="row">
    <div class="col-md-12">
<h2><i class="fa-brands fa-twitter"></i>
<i class="fa-brands fa-facebook"></i>
<i class="fa-brands fa-google-plus-g"></i>
<i class="fa-brands fa-instagram"></i></h2>
</div>
</div>
</div>

<hr>
<br>
<p style="text-align: center;" >Copyright © 2023 SOBUSAP BURKINA – Designed by Digital Services</p>
<h1> <a  href="#haut"><i class="fa-sharp fa-solid fa-rotate-left"></i></a></h1>
@endsection
</body>
</html>
