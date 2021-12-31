
	<!--NAVBAR-->
  <?php include("../partials/header.tpl.php"); ?>
  <?php include("../partials/navbar-views.tpl.php"); ?>



	      <!--BANNIERE CARROSSERIE-->
<section class="banniere bg-dark d-flex w-100 h-50 flex-column justify-content-center align-items-center">
<h3 class="display-3 text-center text-white">Carrosserie / Peinture</h1>
<a href="prendre_rdv.php" class="btn btn-dark">Prendre RDV</a>
</section>
<br/>


<!--CAROUSSEL CARROSSERIE PEINTURE--> 
<div class="container">
	<div class="row">
		<div class="col-6">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner rounded">
    <div class="carousel-item active">
      <img src="../assets/images/audi_bleu.jpg" class="d-block w-100" alt="audi">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/mercedes.jpg" class="d-block w-100" alt="mercedes">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/camion_fedex.jpg" class="d-block w-100" alt="camion fedex">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/camion_jpg.jpg" class="d-block w-100" alt="camion jpg">
    </div>
        <div class="carousel-item">
      <img src="../assets/images/voiture_ancienne_face.jpg" class="d-block w-100" alt="voiture ancienne face">
    </div>
        <div class="carousel-item">
      <img src="../assets/images/voiture_ancienne_dos.jpg" class="d-block w-100" alt="voiture ancienne dos">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/vehicule_ancien.jpg" class="d-block w-100" alt="vehicule ancien">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/limousine.jpg" class="d-block w-100" alt="limousine">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="col-6">
	<h1 class="display-4">Carrosserie / Peinture</h1>
	<br/>
	<p>Nos carrossiers sont dottés d'une excellente formation de plus de 15 ans d'experience.
		<br/>
	Formés et certifiés pour intervenir sur les véhicules hybrides et electriques.
		<br/>
	Grande conscience professionnelle, à l'écoute des demandes spécifiques des clients qui sort du cadre de l'aspect d'origine du véhicule.
		<br/>
	Outillage professionnel de haute qualité.
		<br/>
	Restauration de véhicules anciens.</p>
		<br/>
</div>

</div>
</div>
<br/>


<div class="container">
<h2 id="menu" class="display-6 mb-5">Préstations carrosserie / peinture :</h2>
<p>Afin de remettre à neuf la carrosserie de votre véhicule, nous effectuons ce type de prestation :</p>
	<ul>
		<li><u>Carrosserie</u></li>
		<li><u>Passage au marbre</u></li>
		<li><u>Peinture</u></li>
		<li><a href="pare_brise.php">Réparation, remplacement de pare-brise</a></li>
	</ul>
<br/>




<h2 class="display-6 mb-5">Des questions ?</h2>
<p>Contactez nous via notre <a href="contact.php">formulaire.</a></p>
<br/>

<a href="prendre_rdv.php" class="btn btn-primary">Prendre RDV</a>
</div>




	    <!--FOOTER--> 
      <?php include("../partials/footer-views.tpl.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	</body>
</html>