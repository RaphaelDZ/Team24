<?php
session_start();
include_once("bdd.php");
    if( isset($_POST['valider']))
    {
        $email = mysqli_real_escape_string($bdd,htmlentities(trim($_POST["email"]))); 
        $password = $_POST["password"]; 
    
        if (empty($email)||empty($password)) 
        {
            // verifier si le form est bien remplie
            header("Location:../connexion.php?error=Veuillez remplir le formulaire.");
            
        }
        else
        {
            $query=mysqli_query($bdd,"SELECT password,statut FROM user WHERE email='".$email."' ;");// On recupere le mdp par rapport à l'email
            $data=mysqli_fetch_array($query);           //Resultats de la requete
            $hash = $data['password'];                        // recuperation du mdp par rapport a $data.
            $statut = $data['statut'];   
            
            if($statut==4)
            {
                header("Location:../connexion.php?error=Vous êtes banni");
                
            }
            else if (password_verify($password,$hash))
            {
                // verifier si le hash correspond au mdp entrer par l'user
                $query=mysqli_query($bdd,"SELECT id_user FROM user WHERE password='".$hash."';") ;
                $data=mysqli_fetch_array($query);
                $_SESSION['id_user'] = $data['id_user']; // faire correspondre le mdp avec l'id de l'user.
                
                if(isset($_POST['resterconnecter'] ))
                {
                    // Pour eviter de se connecter tous le temps
                    $crypt_id= sha1($id_user);
                    $crypt_email= sha1($email);
                    $duree= time( ) + 365*24*3600;
                    setcookie('id_log', $_SESSION['id_user']);  // Creation d'un Cookie
                }
                header("Location:../profil.php");
            }
            else
            {
                header("Location:../connexion.php?error=Email ou mot de passe incorrect !!");
                
            }
        }
}
    
?>