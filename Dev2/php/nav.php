<PHP
if (isset($_POST["recherche"])) $re=trim($_POST["recherche"]);
    else $re="";
if ($re!="")
  {
   // ====== on se log a MYSQL   
   $Flag1=mysql_connect($Serveur,$User,$Mdp)  OR die('Erreur connexion ');
   $Flag2=mysql_select_db($MaBase) OR die('Erreur connexion ');
   $result=mysql_query( "select * from mestables
         WHERE  Nom >= '' and Nom<'zzzzzzzzzzzzzz'  ");
      while ($row=mysql_fetch_array($result)) 
         {
          $Nom= stripslashes($row['Nom']);
             $controle=strpos($Nom,$re);
             if ($controle !== false) { echo $Nom}  
         }
   mysql_close();
 
   }
 
<form  action="test.php" method="POST" >
<input type="text" name="recherche" size="20"  value="" /><br />
<input type="submit" name="Submit" value=" RECHERCHE ">
</form>
?>
<!DOCTYPE html> 
   <body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="StudentHood"  height="60"/></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-5 nav-co">
                            <button type="button" class="btn btn-default navbar-btn navbar-right"><i class="glyphicon glyphicon-chevron-right nav-glyph"></i> Inscription</button>
                            <button type="button" class="btn btn-default navbar-btn navbar-right"><i class="glyphicon glyphicon-chevron-right nav-glyph"></i> Connexion</button>
                        </div>
                        <div class="col-lg-3">
                        
                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Rechercher"/>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right text-uppercase">
                                    <li class="active"><a href="#">Accueil</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                </ul>

                            </div>
                        <!-- /.navbar-collapse -->
                        </div>
                        <div class="col-lg-3">
                            <ul class="nav navbar-nav navbar-right glyph">
                                <li id="fa-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li id="fa-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li id="fa-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
    </nav>
</body>
