<?php require 'header.php' ?>

	<a href="ajout_annuaire.php">
        <button type="button" class="btn btn-lg btn-primary" >Ajouter un nouveau</button>
    </a>
    <br/>
    <br/>

   <?php if(isset($_SESSION['message'])): ?>
   		<div class="alert alert-<?=$_SESSION['msg_type'] ?> alert-dismissible fade show" role="alert">
		  <?php 
		  	echo $_SESSION['message'];
		  	unset($_SESSION['message']);
		  ?>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
   	<?php endif  ?>

   <?php require_once 'annuaire_list.php' ?>


<?php require 'footer.php' ?>