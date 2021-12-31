
	<!--NAVBAR-->
    <?php include("../partials/header.tpl.php"); ?>
  <?php include("../partials/navbar-views.tpl.php"); ?>
  
          <!--BANNIERE ESPACE PRO-->
<section class="banniere bg-dark d-flex w-100 h-50 flex-column justify-content-center align-items-center">
<h3 class="display-3 text-center text-white">Contact</h1>
</section>
<br/>



<!--CARTE COORDONNEES-->
    <h2 class="display-4 text-center mb-5">Coordonnées</h2>
    <br/>
	<div class="container text-center">
		<div class="row">
			<div class="col-12">
    			<ul class="list-group">
  					<li class="list-group-item list-group-item-primary">ADRESSE</br>
        			10 Rue de Paris</br>
        			75000 PARIS
  					</li>
  					<li class="list-group-item list-group-item-primary">TELEPHONE</br>
        			01 02 03 04 05</li>
        			<li class="list-group-item list-group-item-primary">FAX</br>
        			01 10 11 12 37</li>
  					<li class="list-group-item list-group-item-primary">HORAIRES</br>
        			Du lundi au vendredi</br>
        			De 9h à 12h et de 14h à 18h</li>
				</ul>
			</div>

			
		</div>
	</div>
	<br/>




    <!--FORMULAIRE DE CONTACT-->
    <br/>
    <h2 class="display-4 text-center mb-5">Besoin d'informations ?</h2>
    <br/>
<div class="container">
    <form method="post" action="formulaire_contact_insertion.php">      
        <div class="row">

            <div class="col">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" placeholder="Votre nom" aria-label="nom" name="nom" id="nom" required>
                <span id="nom_manquant"></span><br/>
            </div>

            <div class="col">
                <label for="nom">Prénom</label>
                <input type="text" class="form-control" placeholder="Votre prénom" aria-label="prenom" name="prenom" id="prenom" required>
                <span id="prenom_manquant"></span><br/>
            </div>
        </div>







        <div class="row">
            <div class="col">
                <label for="Telephone">Telephone</label>
                <input type="tel" class="form-control" placeholder="Votre téléphone" aria-label="telephone" name="telephone" id="telephone" required>
                <span id="tel_manquant"></span><br/>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Votre email" aria-label="email" name="email" id="email" required>
                <span id="email_manquant"></span><br/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="societe">Société</label>
                <input type="text" class="form-control" placeholder="Nom de votre société" aria-label="societe" name="societe" id="societe">
                <span id="email_manquant"></span><br/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="societe">Objet</label>
                <input type="text" class="form-control" placeholder="Objet de votre demande" aria-label="objet" name="objet" id="objet">
                <span id="email_manquant"></span><br/>
            </div>
        </div>

        <div class="form-group">
            <label for="question">Posez votre question içi :</label>
            <textarea class="form-control" name="question" id="question" rows="3"></textarea>
        </div>

        <br/>
        <button type="submit" class="btn btn-primary btn-lg" id="bouton_question">Envoyer</button>
    </form>
</div>




</br>
	    <!--FOOTER--> 
		<?php include("../partials/footer-views.tpl.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>