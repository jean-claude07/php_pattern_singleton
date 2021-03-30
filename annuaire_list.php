<?php
	
	$mysqli = new mysqli('localhost','root', '', 'design_pattern') or die(mysqli_error($mysqli)); 

	$result = $mysqli->query("SELECT *FROM annuaire") or die($mysqli->error);

?>

	<table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Telephone</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php while ($row = $result->fetch_assoc()): ?> 
        		<tr>
		            <td scope="row"><?php echo $row['id']; ?></td>
		            <td><?php echo $row['nom']; ?> </td>
		            <td><?php echo $row['prenom']; ?></td>
		            <td><?php echo $row['telephone']; ?></td>
		            <td>
						<a href="ajout_description.php?annuaire=<?php echo($row['id']) ?>">    
		                    <button type="button" class="btn btn-primary">voire les descriptions</button>
		                </a>
					</td>
		            <td >
		                <a href="modifier.php?edit=<?php echo($row['id']) ?>">
		                    <button type="button" class="btn btn-secondary">Modifier</button>
		                </a>
		                <a href="config.php?delete=<?php echo($row['id']) ?>">
		                	<button type="button" name="delete" class="btn btn-danger">Suprimmer</button>
		                </a>
		                <a href="ajout_description.php?annuaire=<?php echo($row['id']) ?>">    
		                    <button type="button" class="btn btn-primary">ajouter un description</button>
		                </a>
		            </td>
		        </tr>
            <?php endwhile; ?>
        </tbody>
    </table>