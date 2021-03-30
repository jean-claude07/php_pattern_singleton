<?php
	session_start();
	
	$mysqli = new mysqli('localhost','root', '', 'design_pattern') or die(mysqli_error($mysqli)); 

	$update = false;
	$id = 0;

	$nom = '';
	$prenom = '';
	$telephone = '';


	if(isset($_POST['save'])){
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$telephone = htmlspecialchars($_POST['telephone']);

		$mysqli->prepare('SELECT nom, prenom, telephone');

		$mysqli->query("INSERT INTO annuaire (nom, prenom, telephone) VALUES('$nom', '$prenom', '$telephone')") or die($mysqli->error);

		$_SESSION['message'] = "annuaire saved";
		$_SESSION['msg_type'] = "success";

		header("location: index.php");

	}


	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$mysqli->query("DELETE FROM annuaire WHERE id=$id") or die(mysqli_error($mysqli));

		$_SESSION['message'] = "annuaire deleted";
		$_SESSION['msg_type'] = "danger";

		header("location: index.php");

	}

	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$resp = $mysqli->query("SELECT * FROM annuaire WHERE id = $id") or die(mysqli_error($mysqli));
		$desc = $resp->fetch_array();
		$update = true;
		$nom = $desc['nom'];
		$prenom = $desc['prenom'];
		$telephone = $desc['telephone'];
		


		/*$resp->execute(array($_GET['annuaire']));
		$desc = $resp->fetch();*/
	}

	if(isset($_POST['update'])){
		$id = htmlspecialchars($_POST['id']);
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$telephone = htmlspecialchars($_POST['telephone']);

		$mysqli->prepare("UPDATE `annuaire` SET nom='$nom', prenom='$prenom', telephone='$telephone' WHERE id = $id") or die($mysqli->error);

		header("location: index.php");

	}

	if(isset($_POST['save_desc'])){
		$id_annuaire = htmlspecialchars($_POST['id_annuaire']);
		$description = htmlspecialchars($_POST['description']);

		$mysqli->prepare('SELECT id_annuaire, description');

		$mysqli->query("INSERT INTO description (id_annuaire, description) VALUES('$id_annuaire', '$description')") or die($mysqli->error);

		$_SESSION['message'] = "description saved";
		$_SESSION['msg_type'] = "success";

		header("location: index.php");

	}



	

?>