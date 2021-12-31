
	<!--NAVBAR-->
	<?php include("../partials/header.tpl.php"); ?>
  <?php include("../partials/navbar-views.tpl.php"); ?>


    <!--BANNIERE VEHICULE OCCASION-->
<section class="banniere bg-dark d-flex w-100 h-50 flex-column justify-content-center align-items-center">
<h3 class="display-3 text-center text-white">Véhicules d'occasion</h1>
</section>
<br/>



<!--VEHICULE OCCASION--> 
<div class="container">
  <div class="row">
    <div class="col-4">

<!--VEHICULE OCCASION n°1--> 
      <div class="card" style="width: 18rem;">
        <img src="../assets/images/range.jpeg" class="card-img-top" alt="occasion 1 range rover">
          <div class="card-body">
            <h5 class="card-title">Land Rover Range Rover</h5>
              <p class="card-text">
                <ul>
                  <li>Marque : </li>
                  <li>Modèle : </li>
                  <li>Année : </li>
                  <li>Kilométrage : </li>
                  <li>Motorisation : </li>
                  <li>Prix : 30 000 €</li>
                </ul>
              </p>
                <a href="#" class="btn btn-primary">Voir la fiche</a>
          </div>
      </div>
    </div>

<!--VEHICULE OCCASION n°2--> 
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img src="../assets/images/audi.jpeg" class="card-img-top" alt="occasion 2 audi" height="165px;">
          <div class="card-body">
            <h5 class="card-title">Audi A6 Sline</h5>
              <p class="card-text">
                <ul>
                  <li>Marque : Audi</li>
                  <li>Modèle : A6</li>
                  <li>Année : 2012</li>
                  <li>Kilométrage : 172 000 KM</li>
                  <li>Puissance : 245 CH</li>
                  <li>Prix : 18 000 €</li>
                </ul>
              </p>
                <a href="#" class="btn btn-primary">Voir la fiche</a>
          </div>
      </div>
    </div> 

<!--VEHICULE OCCASION n°3-->  
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img src="../assets/images/bmw.jpeg" class="card-img-top" alt="occasion 3 bmw serie 3">
          <div class="card-body">
            <h5 class="card-title">BMW Serie 3</h5>
              <p class="card-text">
                <ul>
                  <li>Marque : BMW</li>
                  <li>Modèle : Serie 3</li>
                  <li>Année : 2010</li>
                  <li>Kilométrage : 145 000 KM</li>
                  <li>Puissance : 143 CH</li>
                  <li>Prix : 8000 €</li>
                </ul>
              </p>
                <a href="#" class="btn btn-primary">Voir la fiche</a>
          </div>
      </div>
    </div>

  </div> <!--fermeture div row-->
</div> <!--fermeture div container--> 
<br/>

<!--VEHICULE OCCASION n°4-->  
<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img src="../assets/images/bm.jpeg" class="card-img-top" alt="occasion 1 range rover">
          <div class="card-body">
            <h5 class="card-title">BMW Série 3</h5>
              <p class="card-text">
                <ul>
                  <li>Marque : </li>
                  <li>Modèle : </li>
                  <li>Année : </li>
                  <li>Kilométrage : </li>
                  <li>Motorisation : </li>
                  <li>Prix : 6000 €</li>
                </ul>
              </p>
                <a href="#" class="btn btn-primary">Voir la fiche</a>
          </div>
      </div>
    </div>
  </div>
</div>

<br/>
<div class="container">
  <a href="https://autorapideservice.multimarque.fr/minisite/voitures-occasions" alt="vehicule occasion multimarque">Voir plus de véhicules</a>
</div>



	    <!--FOOTER--> 
      <?php include("../partials/footer-views.tpl.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>