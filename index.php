<?php include("partials/header.tpl.php"); ?>
<?php include("partials/navbar.tpl.php"); ?>

<!--BANNIERE IMAGE ACCUEIL-->
<section class="accueil bg-dark d-flex w-100 h-100 flex-column justify-content-center align-items-center">

    <h1 class="display-1 text-center text-white">Auto Service</h1>
    <p class="lead text-center text-white">Accueil du lundi au vendredi pour l'entretien, la réparation, l'achat et la vente de véhicules toutes marques.</p>
    <p class="lead mb-5">
        <a href="#presentation" class="btn btn-primary">En savoir plus</a>
    </p>
</section>
<br/>



<!--AUTO RAPIDE SERVICE BIENVENUE--> 
<div class="container">
	<div class="row">
		<div class="col-6">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner rounded">
    <div class="carousel-item active">
      <img src="./assets/images/img.jpeg" class="d-block w-100" alt="exterieur garage">
    </div>
    <div class="carousel-item">
      <img src="./assets/images/interieur_garage_un.jpg" class="d-block w-100" alt="interieur garage">
    </div>
    <div class="carousel-item">
      <img src="./assets/images/interieur_garage_deux.jpg" class="d-block w-100" alt="interieur garage">
    </div>
    <div class="carousel-item">
      <img src="./assets/images/bureau.jpg" class="d-block w-100" alt="interieur garage">
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
	<h1 class="display-5 text-center" id="presentation">Bienvenue chez <strong>Auto Service</strong></h1>
	<br/>
	<p>Notre garage est situé au 10 rue de Paris 75000 PARIS, ouvert du lundi au vendredi de 8h30 à 18h.
  </br> 
  Nous sommes en mesure de remettre en état la carrosserie de votre véhicule. Nos carrossiers/peintres sont dottés d'une excellente formation de plus de 15 ans d'experience, <u>formés et certifiés pour intervenir sur les véhicules hybrides et éléctriques.</u> Nous <u>intervenons</u> également sur la restauration de vehicules anciens.
  <br/>
  Notre personnel mécanicien est pourvu d'une experience de plus de 20 ans <u>et est formé au reprogrammation moteur.</u>
  </br>
  Profitez de nos compétences pour l'entretien de votre véhicule <u>avec remise à zero OU en conservant la garantie constructeur.</u>
  <br/>
  Nous disposons d'un outillage professionnel de haute qualité et travaillons sur des véhicules de toutes marques ainsi que sur les véhicules d'entreprise.
  </br>
  Nous <u>travaillons</u> avec <strong>toutes les assurances.</strong></br>
  A l'ecoute de nos clients, nous saurons satisfaire vos attentes.</br>
  N'hesitez pas à nous <a href="views/contact.php" alt="contact">contacter</a> pour plus d'informations.
</p>
</div>

</div>
</div>
<br/>



<!--NOS SERVICES-->
<h2 id="menu" class="display-4 text-center mb-5">Nos services</h2>
<br/>
<div class="container">
	<div class="row">
	<!--<div class="row row-cols-1 row-cols-md-3 g-4">-->
  		<div class="col-6 text-center">
    		<div class="card">
     		<a href="views/carrosserie_peinture.php"><img class="card-img-top" src="./assets/images/peinture.jpg" alt="image peintre" /></a>
      			<div class="card-body">
        		<h5 class="card-title">Carrosserie / Peinture</h5>
       			<p class="card-text">Réparation, entretien</p>
  				</div>
    		</div>
  		</div>

  		<div class="col-6 text-center">
    		<div class="card">
      		<a href="views/mecanique_entretien.php"><img class="card-img-top" src="./assets/images/mecano.jpg" alt="img mecanicien" /></a>
      			<div class="card-body">
        		<h5 class="card-title">Mecanique</h5>
        		<p class="card-text">Entretien</p>
      			</div>
    		</div>
  		</div>
	</div>
</div>



<!--SUITE NOS SERVICES-->
<br/>
<div class="container">
	<div class="row">
	<!--<div class="row row-cols-1 row-cols-md-3 g-4">-->
  		<div class="col-3 text-center">
    		<div class="card">
            <a href="views/pare_brise.php"><img class="card-img-top" src="./assets/images/pare_brise.jpg" alt="image pare brise" /></a>
      			<div class="card-body">
        		<h5 class="card-title">Pare-brise</h5>
        		<!--<p class="card-text">....</p>-->
      			</div>
    		</div>
 		</div>

  		<div class="col-3 text-center">
    		<div class="card">
            <a href="views/clim.php"><img class="card-img-top" src="./assets/images/clim_droit.jpg" alt="image clim" /></a>
      			<div class="card-body">
        		<h5 class="card-title">Climatisation</h5>
        		<!--<p class="card-text">...</p>-->
      			</div>
    		</div>
  		</div>

  		<div class="col-3 text-center">
    		<div class="card">
            <a href="views/diag_auto.php"><img class="card-img-top" src="./assets/images/diag.jpg" alt="image diagnostic auto" /></a>
      			<div class="card-body">
        		<h5 class="card-title">Diagnostic automobile</h5>
        		<!--<p class="card-text">....</p>-->
      			</div>
    		</div>
  		</div>

  		<div class="col-3 text-center">
    		<div class="card">
            <a href="views/reprog_moteur.php"><img class="card-img-top" src="./assets/images/motor_droit.jpg" alt="image moteur" /></a>
      			<div class="card-body">
        		<h5 class="card-title">Reprogrammation moteur</h5>
        		<!--<p class="card-text">...</p>-->
      			</div>
    		</div>
  		</div>
	</div>
</div>



<!--NOS ENGAGEMENTS-->
<br/>
<h2 id="menu" class="display-4 text-center mb-5">Nos engagements</h2>
<br/>
<div class="container">
	<div class="row">
	<!--<div class="row row-cols-1 row-cols-md-3 g-4">-->
  		<div class="col-4 text-center">
    		<div class="card">
            <img class="card-img-top" src="./assets/images/assurance.jpg" alt="image assurance" />
      			<div class="card-body">
        		<h5 class="card-title">Toutes assurances</h5>
        		<!--<p class="card-text">....</p>-->
      			</div>
    		</div>
 		</div>

  		<div class="col-4 text-center">
    		<div class="card">
            <img class="card-img-top" src="./assets/images/rapidite.jpg" alt="image rapidite" id="image_rapidite" />
      			<div class="card-body">
        		<h5 class="card-title">Rapidité de prise en charge</h5>
        		<!--<p class="card-text">...</p>-->
      			</div>
    		</div>
  		</div>

  		<div class="col-4 text-center">
    		<div class="card">
            <img class="card-img-top" src="./assets/images/qualite.jpg" alt="image qualite" />
      			<div class="card-body">
        		<h5 class="card-title">Qualité</h5>
        		<!--<p class="card-text">....</p>-->
      			</div>
    		</div>
  		</div>
	</div>
</div>




<!--NOS VEHICULES--> 
<br/>
<h2 id="menu" class="display-4 text-center mb-5">Nos véhicules</h2>
<br/>
<br/>
<div class="container">
	<div class="row">
<!--<div class="row row-cols-1 row-cols-md-3 g-4">-->
  <div class="col-6 text-center center">
    <div class="card">
            <a href="views/vehicule_neuf.php"><img class="card-img-top" src="./assets/images/range.jpeg" alt="image vehicule neuf" /></a>
      <div class="card-body">
        <h5 class="card-title">Véhicules neuf</h5>
        <p class="card-text">Reprise de votre véhicule possible</p>
      </div>
    </div>
  </div>
  <div class="col-6 text-center">
    <div class="card">
            <a href="views/vehicule_occasion.php"><img class="card-img-top" src="./assets/images/bm.jpeg" alt="image bmw" /></a>
      <div class="card-body">
        <h5 class="card-title">Véhicules d'occasion</h5>
        <p class="card-text">Reprise de votre véhicule possible</p>
      </div>
    </div>
  </div>
</div>
</div>













    <!--FOOTER--> 
	<?php include("partials/footer.tpl.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	</body>
</html>