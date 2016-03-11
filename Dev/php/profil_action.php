<?php
session_start();
include_once("bdd.php");
include_once("function.php");
include_once("redirection.php");

if (isset($_SESSION['id_user'])){
    $id_user=$_SESSION['id_user'];
    $data=user_info($id_user);
    $prenom = $data['prenom']; 
    $nom = $data['nom']; 
    $pseudo = $data['pseudo']; 
    $email = $data['email'];
    $numero = $data['numero']; 
    
}else{
header('location:login.php');
}

if(isset($_POST['valider'])){
	$pseudo = $_POST["pseudo"];
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
    $numero = $_POST["numero"];
    

	$bdd = mysqli_connect ("localhost", "root", "root", "blog");
	$query = " UPDATE user set pseudo='".$pseudo."', nom='".$nom."', prenom='".$prenom."', email='".$email."', numero='".$numero."' where id_user='".$_SESSION['id_user']."'";
	$res = mysqli_query($bdd, $query) or die (mysqli_error());
}

if(isset($_GET['id_user'])){
	$bdd = mysqli_connect ("localhost", "root", "root", "blog");
	$query = " SELECT * FROM user WHERE id_user=".$_GET['id_user']." ";
	$res = mysqli_query($bdd, $query) or die (mysqli_error());
	$data = mysqli_fetch_array($res);
}

include_once('../profil.php');
?>