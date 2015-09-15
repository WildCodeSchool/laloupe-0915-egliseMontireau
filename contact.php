<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />

      <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />      

      <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.js"></script>

      <link rel="stylesheet" type="text/css" href="assets/css/slide.css" />
      <script type="text/javascript" src="assets/js/responsiveslides.js"></script>
      <script type="text/javascript" src="assets/js/responsiveslides.min.js"></script>   

      <title>Comité de Sauvegarde de l'Eglise St-Barthélemy de Montireau</title>

   </head>

	<body>

      <?php include('menu.php'); ?>
      
		<div>
			<form action="toto.php" method="post" >
				<fieldset>
					<legend> La Sauvegarde de l'église de Montireau</legend><!--le nom du formulaire-->
						<p> </p>
					   <input type="radio" name="CSS" value="Mr" id="Mr" checked="checked" />
					   	<label for="Mr" class="inline">Mr</label> <!-- choix -->
					   <input type="radio" name="CSS" value="Mme" id="Mme" /><!-- choix -->
					   	<label for="Mme" class="inline">Mme</label>
					   <input type="radio" name="CSS" value="Mlle" id="Mlle" /><!-- choix -->
					   	<label for="Mlle" class="inline">Mlle</label>
					<legend>:</legend>
							<label for="Nom">Nom:</label> <!--Nom de la personne -->
						<input type="Nom" name="Nom" size="20" maxlength="40" value="Nom" id="Nom" /></br>
					   	<label for="prenom">Prénom:</label> <!--Prénom de la personne-->
					   <input type="prenom" name="prenom" size="20" maxlength="40" value="prenom" id="prenom" /></br>
				      	<label for="email">Votre e-mail:</label> <!--l'adresse mail-->
					   <input type="email" name="email" size="20" maxlength="40" value="email" id="email" /></br>
		            <input type="radio" name="CSS" value="adr" id="adr" checked="checked" />
					   	<label for="adr" class="inline">Adhérer à l'association, la cotisation s'éléve à 10€</label> </br><!-- pour etre adérent  -->
					   <input type="radio" name="CSS" value="eff" id="eff" /><!-- choix de don -->
					   	<label for="eff" class="inline">Effectuer un don</label>
					  
					  <p>Ci-joint un chéque de ..................€</p>
					  <p>chéque libellé à l'ordre de: Comité de Sauvegarde de l'église de Montireau </br>
					         A...............    le............</p>
					   
					<legend></legend></br>
					     
						<label for="comments"></label><!--commentaire-->
					   	<textarea name="comments" id="comments"  cols="20" rows="4" name="montextarea" onkeyup="javascript:MaxLengthTextarea(this, 250)"wrap="soft">écrivez votre commentaire en 250 caractère max</textarea>
					    
				</fieldset>

				<p>
					<input type="submit" value="Envoyer" />
					<input type="reset" value="Annuler" />
				</p>
			</form>
		</div>   
      
      <?php include('footer.php'); ?>
   </body>
</html>