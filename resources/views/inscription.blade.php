
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

<div  class="card text-bg-light "  style="max-width: 70rem;" >
  <div class="card-header">INFORMATIONS DE CONNEXION  </div>
  <div class="card-body">


<form >
<div class="row">

  <div class="col-md-4">
    <label  class="form-label">Email *</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" >
    Veuillez saisir une adresse de messagerie valide.
  </div>
  <div class="col-md-4">
    <label  class="form-label">Mot de passe *</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    Veuillez saisir votre mot de passe.
  </div>
  <div class="col-md-4">
    <label  class="form-label">Répéter le mot de passe *</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder=" Repeat Password">
    Veuillez répéter votre nouveau mot de passe
  </div>
  
  </div>
 
</form >

</div>
</div>
<br>


<div  class="card text-bg-light "  style="max-width: 70rem;" >
  <div class="card-header">INFORMATION COMPTE</div>
  <div class="card-body">


<form >
Bienvenue sur le formulaire de création de votre compte
<br>
<br>
<div class="row">

  <div class="col-md-4">
  Civilité 
  <br>
  *
<select  class="form-select form-select-lg mb-3" >
  <option selected>Mr</option>
  <option value="1">Mrs</option>
  <option value="2">Dr</option>
  <option value="3">Prof</option>
</select>
</div>
  <div class="col-md-4">
    <label  class="form-label">Votre prénom
 </label>
    <br>
    *
    <input type="text" class="form-control" id="inputPassword4" >
  </div>
  <div class="col-md-4">
    <label  class="form-label">Votre Nom </label>
    <br>
    *
    <input type="text" class="form-control" id="inputPassword4" >
  </div>
  <div>

</div>
  <div class="col-md-4">
    <label  class="form-label">Profession </label>
    <input type="text" class="form-control" id="inputPassword4" >
  </div>
  <div class="col-md-4">
    <label  class="form-label">Organisme affilié </label>

    <input type="text" class="form-control" id="inputPassword4" >
  </div>
<br>
<br>
<br>

<div class="col-md-4">
    <label  class="form-label">Numéro de téléphone </label>
    <input type="text" class="form-control" id="inputPassword4" >
  </div>
  <div class="col-md-4">
    <label  class="form-label">Votre URL personnel </label>

    <input type="text" class="form-control" id="inputPassword4" >
  </div>
  <div class="col-md-4">
Sexe
<select  class="form-select form-select-lg mb-3" >
  <option selected>Homme</option>
  <option value="">Femme</option>
  
</select>
</div>
<div class="col-md-4">
Contact de préférence
<select  class="form-select form-select-lg mb-3" >
  <option selected>Email</option>
  <option value="">Phone</option>
  
</select>
</div>
<div class="col-md-4">
    <label  class="form-label">Entrez votre adresse </label>
    <input type="text" class="form-control" id="inputPassword4" >
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Votre Biographie</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<div class="col-md-4"> 
  <label  class="form-label">Entrez le code de sécurité (obligatoire) </label>
  <div class="input-group">
  <i class="fas fa-shield-alt" style="font-size:36px"></i>
<input  type="password" class="form-control" id="inputPassword4" >
  </div>
  </div>
  
    <!--

  <label class="form-label" >
  Entrez le code de sécurité (obligatoire)  </label>
  <div class="input-group">
   <div class="input-group-addon">
	<i class="fa fa-envelope-o"></i> 
   </div>
   <input class="form-control" id="email" name="email" type="text"/>
  </div>-->
  <br>
  <br>
  

  </div>


  <p>

  <div class="d-grid gap-2" style="max-width: 30rem;">
  <button class="btn btn-primary" type="button">S'INSCRIRE</button>
</div></p>
</form >

</div>
</div>

@yield('content')

</body>
</html>
