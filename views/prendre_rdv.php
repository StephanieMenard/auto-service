
	<!--NAVBAR-->
    <?php include("../partials/header.tpl.php"); ?>
  <?php include("../partials/navbar-views.tpl.php"); ?>

          <!--BANNIERE ESPACE PRO-->
<section class="banniere bg-dark d-flex w-100 h-50 flex-column justify-content-center align-items-center">
<h3 class="display-3 text-center text-white">Prendre RDV</h1>
</section>
<br/>





    <!--FORMULAIRE DE CONTACT-->
    <br/>
    <h2 class="display-4 text-center mb-5">Formulaire RDV</h2>
    <br/>
<div class="container">
    <form method="post" action="formulaire_rdv_insertion.php">      
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


<!--regex pour adresse mail-->
<!--NE FONCTIONNE PAS, VOIR SITE DEVELOPPEZ.NET ; TAPER 'REGEX FORMULAIRE PHP ISSET' 2EME SITE-->
<?php 
if (isset($_POST['email']))
{
    $_POST['email'] = htmlspecialchars($_POST['email']);

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    {
        echo 'L\'adresse ' . $_POST['email'] . ' est valide.';
    }
    else
    {
        echo 'L\'adresse ' . $_POST['email'] . ' n\'est pas valide.';
    }
}
?>
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
                <select name="objet" id="objet" required>
                    <option value="">Choisissez</option>
                    <option value="carrosserie_peinture">Carrosserie / Peinture</option>
                    <option value="mecanique_entretien">Mécanique / Entretien</option>
                    <option value="diag_auto">Diagnostic automobile</option>
                    <option value="reprog_moteur">Reprogrammation moteur</option>
                    <option value="pare_brise">Pare brise</option>
                    <option value="clim">Climatisation</option>
                </select>
                <span id="objet_manquant"></span><br/>
                <br/>
            </div>
        </div>

        <div class="form-group">
            <label for="rdv">Date et heure du RDV souhaité :</label>
            <textarea class="form-control" placeholder="Nous vous recontacterons pour confirmer le RDV" name="rdv" id="rdv" rows="3"></textarea>
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