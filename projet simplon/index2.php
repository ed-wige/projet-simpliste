<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOUVEAU ENREGISTREMENT</title>
    <link rel="stylesheet" href="code.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="google_font">
</head>
<body>

    <header class="header"  style="background-image:linear-gradient(to right,black, brown);">
        <a href="" class="logo" >
            <img src="ima/logo.png"alt="logo"  width="90px" height="80px">
           </a>
      
      <!--    hidden checkbox is used as click reciever,
          so you can use the :checked selector on it. -->
         <input type="checkbox" class="menu-btn" id="menu-btn" />
        
        <!-- label class used for tageting the checkbox -->
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
      
        <ul class="menu">
          <li>
            <a href="#work" class="hr">NOUVEAU ENREGISTREMENT</a>
          </li>
          <li>
            <a href="#careers" class="hr">LISTE DES APPRENANTS</a>
          </li>
          <li>
            <a href="#careers" class="hr">AIDE</a>
          </li>
        </ul>
       
      </header>
      <br><br><br>
      <div class="container">
          <div class="container">
     <h1 class="armelle">NOUVEAU ENREGISTREMENT</h1>
     <h2 class="ar">Apprenant</h2> <br> 
              <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Nom</label>
                      <input type="text" name="nom" class="form-control" id="inputnom">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Prenom</label>
                      <input type="text" name="prenom" class="form-control" id="inputprenom">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Date de naissance</label>
                      <input type="date"name="date" class="form-control" id="inputdate_de_naissance">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Ville d'origine</label>
                      <input type="text" name="ville" class="form-control" id="inputville">
                    </div>
                  </div>
                  <div class="form-row">          
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Formation suivie</label>
                      <input type="text" name="formation"class="form-control" id="inputprenom">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Etablissement précédent</label>
                      <input type="text"name="etablissement" class="form-control" id="inputprenom">
                    </div>
                    
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">Téléphone</label>
                      <input type="number"name="telephone" class="form-control" id="inputtext">
                    </div>
                  <div class="form-group col-md-6">
                    <label for="inputCity">Email</label>
                    <input type="email"name="email" class="form-control" id="inputtext">
                  </div>
                    </div>
                    <div class="form-row">
                      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Genre</option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                        <option value="3">Autre</option>
                      </select>
                      
                    </div> <br>
                    <div class="form-row">
                      <div class="custom-file">
                        <input type="file" name="photo"class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Photo</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Projet pesonnel</label>
                      <textarea class="form-control"name="projet" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div> <br>
                    <h2 class="ar">Tuteur</h2> <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Nom</label>
                          <input type="text"name="nom_tuteur" class="form-control" id="inputnom">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Prenom</label>
                          <input type="text"name="prenom_tuteur" class="form-control" id="inputprenom">
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">Téléphone</label>
                            <input type="number"name="telephone_tuteur" class="form-control" id="inputtext">
                          </div>
                        <div class="form-group col-md-6">
                          <label for="inputCity">Profession</label>
                          <input type="texte"name="profession_tuteur"  class="form-control" id="inputtext">
                        </div>
                          </div>
                    <button class="btn btn-primary1" id="coleur" type="submit">Valider</button>
                    <button class="btn btn-primary2" id="coleur" type="submit">Annuler</button>
                  </div>
                </form> 
              </div> <br> <br>
              <footer  class="fou" style="background-image:linear-gradient(to right,black, brown);">
                  <H2 class="footerarmelle"> Copyright © 2020, SIMPLISTE</H2>
                </footer>
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
</body>
</html>