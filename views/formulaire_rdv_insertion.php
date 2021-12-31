<?php 

//ouverture d'une connexion a la bdd 
$objetPdo = new PDO('mysql:host=localhost;dbname=ars;charset=utf8', 'root','root');


//preparation de la requete d'insertion
$pdoStat = $objetPdo->prepare('INSERT INTO formulaire_rdv VALUES (NULL, :lastname, :firstname, :phone, :mail, :society, :object, :appointment)');


//on lie chaque marqueur a une valeur 
$pdoStat->bindValue(':lastname', $_POST['nom'], PDO::PARAM_STR);

$pdoStat->bindValue(':firstname', $_POST['prenom'], PDO::PARAM_STR);

$pdoStat->bindValue(':phone', $_POST['telephone'], PDO::PARAM_STR);

$pdoStat->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);

$pdoStat->bindValue(':society', $_POST['societe'], PDO::PARAM_STR);

$pdoStat->bindValue(':object', $_POST['objet'], PDO::PARAM_STR);

$pdoStat->bindValue(':appointment', $_POST['rdv'], PDO::PARAM_STR);


//execution de la requete preparée
$insertIsOk = $pdoStat->execute();

if($insertIsOk){
	$message = "Le message a été envoyé";
}
else {
	$message = "Echec";
}
?> 


<?php include("../partials/header.tpl.php"); ?>
  <?php include("../partials/navbar-views.tpl.php"); ?>

    <p><?php echo $message; ?></p>

        <div class="alert alert-primary" role="alert">
  <h4 class="alert-heading">Votre formulaire a été envoyé !</h4>
  <p>
      <p>Les informations renseignées sont les suivantes :<br/>
    <ul>
        <li>Nom : <?php echo $_POST['nom']; ?></li>
        <li>Prenom : <?php echo $_POST['prenom']; ?></li>
        <li>Téléphone : <?php echo $_POST['telephone']; ?></li>
        <li>Email : <?php echo $_POST['email']; ?></li>
        <li>Société : <?php echo $_POST['societe']; ?></li>
        <li>Objet : <?php echo $_POST['objet']; ?></li>
        <li>RDV : <?php echo $_POST['rdv']; ?></li>
    </ul>
  </p>
  <hr>
  <p class="mb-0">Nous reviendrons vers vous dans les 24H.</p>
</div>


    




    </br>
	    <!--FOOTER--> 
      <?php include("../partials/footer-views.tpl.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>