<?php require 'header.php'; ?>
	<h2>Modifier l' annuaire</h2>
	   <div class="row mt">	
	   	<?php require_once 'config.php'; ?>
	   	<?php echo $id ?>
			<div class="col-lg-8 col-lg-offset-2">
					<form method="POST" action="config.php" role="form">

					  <div class="form-group">
					  	<input type="hidden" name="id" value=<?php echo $id; ?> >
					    <input type="text" class="form-control" name="nom"  value="<?php echo($desc['nom']) ?>" required/>
					    <br>
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" name="prenom"  value="<?php echo($desc['prenom']) ?>" required/>
					    <br>
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" name="telephone" value="<?php echo($desc['telephone']) ?>" required/>
					    <br>
					  </div>
					  <button type="submit" name="update" class="btn btn-success">Enregistrer</button>
					</form>    			
				</div>
			</div>
			</div>

	    </div>
<?php require 'footer.php'; ?>