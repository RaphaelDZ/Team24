<!DOCTYPE html>
<html>
	<head>

		<?php include('php/homepage-head.php'); ?>

	</head>
	<body>
		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
                <?php include ('php/nav-hc.php'); ?>
            </header>

			<div role="main" class="main">
                
                
                
                
                <div class="container">
            <div class="titrebas">
                <h1><b>Profil</b></h1>
            </div>

            <div class="uline"></div>
            <?php if(!isset($_POST["valider"])) { ?>
            <form action="php/profil_action.php" method="post">
                </br>
                <!--<div class="log"></div>-->
                <!--<div class="log"><label for="pseudo">Pseudo :</label> 
                <input type="text" class="form-control" name="pseudo" id="pseudo" value="<?php if(isset($data))echo $data ['pseudo']?>"/>
                </div>
                
                <div class="log"><label for="nom">Nom de Famille:</label> 
                <input type="text" name="nom" id="nom" value="<?php if(isset($data))echo $data ['nom']?>"/>
                </div>

                <div class="log"><label for="prenom">Prenom :</label> 
                <input type="text" name="prenom" id="prenom" value="<?php if(isset($data))echo $data ['prenom']?>"/>
                </div>

                <div class="log"><label for="email">Email :</label> 
                <input type="text" name="email" id="email" value="<?php if(isset($data))echo $data ['email']?>"/>
                </div>
                <div class="log-ok"><input type="submit" name="valider" value="Modifier" /></div> 
            </form>
        </div>-->
        
    
    
              <div class="container" style="margin-top:40px">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <strong> <h2>Modifier votre Profil </h2></strong>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form" action="#" method="POST">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="center-block">
                                                        <!--<img class="profile-img"
                                                            src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                                                    </div>-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="glyphicon glyphicon-tags"></i>
                                                                </span> 
                                                                <input type="text" class="form-control" name="pseudo" id="pseudo" value="<?php if(isset($data))echo $data ['pseudo']?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="glyphicon glyphicon-user"></i>
                                                                </span>
                                                                <input type="text" class="form-control" name="nom" id="nom" value="<?php if(isset($data))echo $data ['nom']?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="glyphicon glyphicon-user"></i>
                                                                </span>
                                                                <input type="text" class="form-control" name="prenom" id="prenom" value="<?php if(isset($data))echo $data ['prenom']?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="glyphicon glyphicon-envelope"></i>
                                                                </span>
                                                                <input type="text" class="form-control" name="email" id="email" value="<?php if(isset($data))echo $data ['email']?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="glyphicon glyphicon-phone"></i>
                                                                </span>
                                                                <input type="text" class="form-control" name="numero" id="numero" value="<?php if(isset($data))echo $data ['numero']?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" class="btn btn-lg btn-primary btn-block" name="valider" value="Modifier" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                  </form>
            <?php } else echo "Enregistrement fait";?>
   
        

    </div>
                
                
                
                
                
                
                
 
			<footer id="footer">
				<?php include ('php/footer.php'); ?>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.stellar/jquery.stellar.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="js/views/view.home.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>