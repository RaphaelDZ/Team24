<?php
function liste_user()
{
    require("bdd.php");
    if (isset($_SESSION['id_user']) && statut($_SESSION['id_user'])==3){
        $query= "SELECT id_user,nom,prenom,statut FROM user";
        $res= mysqli_query($bdd, $query);
        return $res;
    }
}
function prenom($id_user)
{
    require("bdd.php");
    $query= "SELECT prenom
             FROM user
             WHERE id_user= ".$id_user." ;";
    
}
function verif($colone,$chaine)
{
    require("bdd.php");
    $query="SELECT id_user FROM user WHERE ".$colone."='".$chaine."'";
    $res = mysqli_query ($bdd, $query);
    $row=mysqli_num_rows($res);
    return $row;
}
//recuperer les articles des utilisateurs
function recup_lecture_article()
{
    require("bdd.php");
    $id = $_SESSION['id_user'];
    $query = "  SELECT h.id_article, date_vu, pseudo, titre_article
                FROM historique h
                
                JOIN user u
                ON u.id_user=h.id_user
                
                JOIN articles a
                ON a.id_article = h.id_article
                
                WHERE h.id_user=".$id."";
    $res = mysqli_query ($bdd, $query);
    return $res;
}
function statut($id_user)
{
    require ("bdd.php");
    $query = mysqli_query($bdd,"SELECT statut FROM user WHERE id_user={$id_user}");
    $res= mysqli_fetch_array($query);
    $statut= $res['statut'];
    return $statut;
        
}

function user_info($id_user)
{
    require("bdd.php");
    $query=mysqli_query($bdd,"SELECT pseudo,nom,prenom,email,numero FROM user WHERE id_user='".$id_user."' ;");// On recupere le mdp par rapport à l'email
    $data=mysqli_fetch_array($query);           //Resultats de la requete
    return $data;
}

function ajouter_article($titre_article,$corps_article,$image,$prix)
{
    require ("bdd.php");
	$query = mysqli_query($bdd,"INSERT INTO articles(titre_article,id_user,corps_article,date_article,image,prix)
	VALUES('$titre_article','{$_SESSION['id_user']}','$corps_article',NOW(),'$image','$prix')")  or die(mysqli_error($bdd));
}
function recup_article()	
{
    require ("bdd.php");
	$articles = array();
	$result = mysqli_query($bdd,"SELECT 
		articles.id_article,
		articles.titre_article,
		articles.id_user,
		articles.corps_article,
        articles.prix,
		articles.image,
		DATE_FORMAT(articles.date_article,'%d/%m/%Y %H:%i:%S') AS date_article,
		commentaires.totales_commentaires,
		DATE_FORMAT(commentaires.dernier_commentaire, '%d/%m/%Y %H:%i:%S') AS dernier_commentaire
	 FROM articles  LEFT JOIN  (
	 	SELECT id_article,COUNT(id_commentaire) AS totales_commentaires,
	 	MAX(date_commentaire) AS dernier_commentaire
	 	FROM commentaires GROUP BY id_article 
	)AS commentaires ON articles.id_article = commentaires.id_article ORDER BY `articles`.`date_article` DESC  ") ;
	while($row = mysqli_fetch_array($result))
	{
		$articles[] = $row;
	}
	return $articles;
}

function recup_article_one($id_article)
{
    require("bdd.php");
    $query = "SELECT pseudo, titre_article, corps_article, date_article,image,avatar,prix  FROM articles a
              
                JOIN user u
                ON u.id_user=a.id_user
            
              WHERE id_article=".$id_article."";

    $res = mysqli_query ($bdd, $query);
    return $res;
}

//inserer historique dans bdd
function lecture_article($id_article)
{
    require("bdd.php");
    $id = $_SESSION['id_user'];
    $query = "INSERT INTO historique(id_article,id_user)
            VALUES (".$id_article.",".$id.")";
    $res= mysqli_query($bdd, $query);
    return $res;
}



function inserer_commentaire($id,$corps_commentaire)
{
    require ("bdd.php");
    $id_user = $_SESSION['id_user'];
	mysqli_query($bdd,"INSERT INTO commentaires(id_article,id_user,corps_commentaire,date_commentaire)
		VALUES('$id','$id_user','$corps_commentaire',NOW())");
    
}
function recup_commentaires($id)
{
    require ("bdd.php");
	$id =(int)$id;
	$commentaires = array();
	$sql = mysqli_query($bdd,"SELECT
		id_user,
		corps_commentaire,
        id_article,
		DATE_FORMAT(date_commentaire,'%d/%m/%Y %H:%i:%S') AS date_commentaire
		FROM commentaires WHERE id_article ='$id' ORDER BY `commentaires`.`corps_commentaire` ASC
		") ;
	while($row = mysqli_fetch_array($sql))
	{
		$commentaires[] = $row;
	}
return $commentaires;
}
function recup_commentaire($id)
{
    require ("bdd.php");
	var_dump($id);
	$id =(int)$id;
	$commentaire = array();
	$sql = mysqli_query($bdd,"SELECT
		id_commentaire,
		membre_commentaire,
		corps_commentaire,
		DATE_FORMAT(date_commentaire,'%d/%m/%Y %H:%i:%S') AS date_commentaire
		FROM commentaires WHERE id_commentaire ='$id' ORDER BY id_commentaire DESC
		") ;
	while($row = mysqli_fetch_array($sql))
	{
		$commentaire[] = $row;
	}
return $commentaire;
}

function banni($id_user)
{
    require("bdd.php");
    $query = "UPDATE statut 
    		  FROM user
              SET statut==4
              WHERE id_user= ".$id_user." ;";

   
     
}
?>