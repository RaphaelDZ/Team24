<?php
session_start();
include_once("function.php");
include_once("bdd.php");

if( isset($_POST['valider'])){ 
    $pseudo = mysqli_real_escape_string($bdd,htmlentities(trim($_POST["pseudo"]))); 
    $nom = mysqli_real_escape_string($bdd,htmlentities(trim($_POST["nom"]))); 
    $prenom = mysqli_real_escape_string($bdd,htmlentities(trim($_POST["prenom"]))); 
    $email = mysqli_real_escape_string($bdd,htmlentities(trim($_POST["email"])));
    $numero = mysqli_real_escape_string($bdd,htmlentities(trim($_POST["numero"])));  
    $password = mysqli_real_escape_string($bdd,htmlentities(trim($_POST["password"])));
    $password2 = mysqli_real_escape_string($bdd,htmlentities(trim($_POST["password2"])));

     if (empty($pseudo)||empty($nom)||empty($prenom)||empty($email)||empty($numero)||empty($password)||empty($password2)) {   // verifier si le form est bien remplie
        $errors[0] = "Veuillez remplir le formulaire";
     }else{

    if (verif('pseudo',$pseudo)!=0){
            $errors[1]="Le pseudo existe déjà";
        }
    if (verif('email',$email)!=0){
            $errors[2]="L'email existe déjà";
    }
    if ($password!=$password2){
            $errors[3]="Mauvais password";
    }
    if (verif('numero',$numero)!=0){
            $errors[4]="Le numero existe déjà";
    }
  }

if(!empty($_FILES) && empty($errors)){
    $password = password_hash($password,PASSWORD_BCRYPT);
    $file_name=$_FILES['avatar']['name'];
    $file_extension=strrchr($file_name, ".");

    $file_tmp_name=$_FILES['avatar']['tmp_name'];
    $file_dest='../img/users/';
    
    var_dump(is_dir($file_dest));
    printf($file_dest.$file_name.'.'.$file_extension . "\n");
    if(move_uploaded_file($file_tmp_name, $file_dest.$file_name.'.'.$file_extension)){
    
      $req= mysqli_query($bdd,'INSERT INTO user (pseudo,nom, prenom, email, numero, password, avatar) VALUES("'.$pseudo.'","'.$nom.'","'.$prenom.'","'.$email.'","'.$numero.'","'.$password.'", "'.$file_dest.'")');

      echo "Fichier bien envoye";
        header('Location: ../membre/');
    echo '<br/><a href="../">Retour</a>';
        
    
    } else {
      echo "Une erreur est survenue lors de l'envoie du fichier";
    }
  } else {
    if (count($errors) > 0) { printf("Error: %s", implode($errors, "<br>")); }
    printf((empty($_FILES)) ? '$_FILES is empty' : '');
}
} else {
    echo "fail";
}


