
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
  
</head>
<body>
  
<div id="haut">
</div>
@include('menue')




<br>
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">ABSTRACT</span>
</nav>
<br>
<br>
Veillez vous connecter pour soumettre ou gérer vos abstracts
<br>
<br>
<div  class="card text-bg-light mb-3" style="max-width: 30rem;" >
  <div class="card-header">Se connecter <u class="fs-6" class="text-end" >Mot de passe oublié  <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
  Réinitialiser</a> </u> </div>
  <div class="card-body">
    
     

  <form>
  <div class="mb-3">
    <input type="text" class="form-control"  placeholder="Nom d'utilisateur ou email"  >
  
  </div> 
  <div class="mb-3"> 
  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe"></div>
  
  <br>
  <div class="mb-3"> 
  <div id="emailHelp" class="form-text">Entrez le code de sécurité (obligatoire)</div>
  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe"></div>
  </div>
  <div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Identifiant</button>
</div>
<br>
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">se souvenir de moi</label>
  </div>
 <hr>
  <p>Vous n'avez pas de compte?<a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
  S'inscrire
</a></p>


</div>
</form>

</div>
</div>
<br>
@yield('content')

</body>
</html>
