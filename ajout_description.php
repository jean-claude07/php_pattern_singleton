<?php require 'header.php' ?>
	<h2>Ajouter un description</h2>
	<?php require_once 'config.php'; ?>
    <div class="row mt">	
    	<?php
	
			$mysqli = new mysqli('localhost','root', '', 'design_pattern') or die(mysqli_error($mysqli));
			$id =  $_GET['annuaire'];
			$result = $mysqli->query("SELECT *FROM description WHERE id_annuaire=$id") or die($mysqli->error);

		?>
		<div class="col-lg-8 col-lg-offset-2">
			<?php while ($row = $result->fetch_assoc()): ?>
				
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">description <?php echo $row['id']; ?></h5>
				    <p class="card-text"><?php echo $row['description']; ?></p>
				  </div>
				</div>

			<?php endwhile ?>
			<form method="post" action="config.php" role="form">
			 
			  <textarea class="form-control" rows="6"  name="description"  placeholder="Veuillez saisir votre description ..."></textarea>
			  <input type="hidden" name="id_annuaire" value="<?php echo($_GET['annuaire']); ?>">
			    <br>
			  <button type="submit" name="save_desc" class="btn btn-success">Enregistrer</button>
			</form>    			
		</div>
	</div>
<?php require 'footer.php' ?>