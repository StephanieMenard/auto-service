	<!--NAVBAR-->
	<?php include("../partials/header.tpl.php"); ?>
  <?php include("../partials/navbar-views.tpl.php"); ?>


	      <!--BANNIERE MECANIQUE-->
<section class="banniere bg-dark d-flex w-100 h-50 flex-column justify-content-center align-items-center">
<h3 class="display-3 text-center text-white">Mécanique et entretien</h1>
<a href="prendre_rdv.php" class="btn btn-dark">Prendre RDV</a>
</section>
<br/>



<!--CAROUSSEL MECANIQUE ET ENTRETIEN--> 
<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="divCarousel">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  				<div class="carousel-inner rounded">
    				<div class="carousel-item active">
     					<img src="../assets/images/meca_un.jpg" alt="mecanique un" class="image_mecanique">
    				</div>
    				<div class="carousel-item">
      				<img src="../assets/images/meca_deux.jpg" alt="mecanique deux" class="image_mecanique">
    				</div>
    				<div class="carousel-item">
      				<img src="../assets/images/meca_trois.jpg"  alt="mecanique trois" class="image_mecanique">
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
		</div>

		<div class="col-6">
			<h1 class="display-4">Mecanique et entretien</h1>
			<br/>
			<p>Notre personnel mécanicien disposant de plus de 20 ans d'experience pourra réviser, réparer ou changer toutes pieces de votre véhicule. 
			<br/>
			Entretien possible avec remise à zero.</p>
			<br/>	
	<ul>
		<li><u>Vidange, entretien, révision</u></li>
		<li><u>Freinage</u></li>
		<li><u>Direction, suspension & tenue de route</u></li>
		<li><u>Batterie et démarrage</u></li>
		<li><u>Moteur</u></li>
		<li><u>Filtration</u></li>
		<li><u>Echappement et pollution</u></li>
		<li><u>Eclairage et visibilité</u></li>
		<li><u>Huiles et liquides</u></li>
		<li><u>Entretien hivernal</u></li>
		<li><a href="clim.php">Climatisation</a></li>
		<li><a href="diag_auto.php">Diagnostic automobile</a></li>
		<li><a href="reprog_moteur.php">Reprogrammation moteur</a></li>
	</ul>
		</div>
	</div>
</div>


<br/>


<div class="container">
<h2 class="display-6 mb-5">Des questions ?</h2>
<p>Contactez nous via notre <a href="contact.php">formulaire.</a></p>
<br/>

<a href="prendre_rdv.php" class="btn btn-primary">Prendre RDV</a>
</div>
<br/>




	    <!--FOOTER--> 
		<?php include("../partials/footer-views.tpl.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>