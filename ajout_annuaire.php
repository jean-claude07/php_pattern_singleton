<?php require 'header.php'; ?>
	<h2>Nouveau annuaire</h2>
	   <div class="row mt">	
	   	<?php require_once 'config.php'; ?>
		<div class="col-lg-8 col-lg-offset-2">
				<form method="post" action="config.php" role="form">
				  <div class="form-group">
				    <input type="text" class="form-control" name="nom"  placeholder="Veuillez saisir le  nom">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="prenom"  placeholder="Veuillez saisir le prenom">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="telephone"  placeholder="Veuillez saisir le numero telephone">
				    <br>
				  </div>
				  <button type="submit" name="save" class="btn btn-success">Enregistrer</button>
				</form>    			
			</div>
		</div>
    </div>
<?php require 'footer.php'; ?>