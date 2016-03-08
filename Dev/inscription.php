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
                
                <section class="form-inscription">
               
                     <div class="container" style="margin-top:40px">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-md-offset-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <strong> <h2> Inscription </h2> </strong>
                                    </div>
                                    <div class="panel-body">
                                          <?php if(!isset($_POST["valider"])||isset($errors)){?>
                <form enctype="multipart/form-data" action="php/inscrip.php" method="POST">

                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-tags"></i>
                                            </span> 
                                            <input class="form-control" placeholder="Pseudo" type="text" name="pseudo" id="pseudo">
                                        </div> <div><?php if(isset ($errors[1])) echo $errors[1];?></div>
                                    </div>
                                <div class="form-group">
                                     <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span> 
                                            <input class="form-control" placeholder="Nom"  type="text" name="nom" id="nom" >
                                        </div> 
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span> 
                                            <input class="form-control" placeholder="Prénom"  type="text" name="prenom" id="prenom" >
                                        </div> 
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-envelope"></i>
                                            </span> 
                                            <input class="form-control" placeholder="Email"  type="email" name="email" id="email" >
                                        </div> 
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-phone"></i>
                                            </span> 
                                            <input class="form-control" placeholder="Telephone"  type="numero" name="numero" id="numero" >
                                        </div> <div><?php if(isset ($errors[4])) echo $errors[4];?></div>
                                    </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="glyphicon glyphicon-lock"></i>
                                                                </span>
                                                                <input class="form-control" placeholder="Mot de Passe" type="password" name="password" id="password" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="glyphicon glyphicon-lock"></i>
                                                                </span>
                                                                <input class="form-control" placeholder="Confirmation Mot de passe" type="password" name="password2" id="password2" >
                                                            </div><div><?php if(isset ($errors[3])) echo $errors[3];?></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="glyphicon glyphicon-file"></i>
                                                                </span>
                                                                <input class="form-control" placeholder="Avatar" type="file" name="avatar" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" class="btn btn-lg btn-primary btn-block" name="valider" value="Ok">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <?php if(isset ($errors[0])){ echo $errors[0]; } ?>
                <?php }else{ echo "Bonjour ".$nom." ".$prenom."  votre ID : " .$email;?>
                <img width="100px" src='<?php echo $file_dest;?>'/><?php }?>
                                    </div>
                                    <div class="panel-footer ">
                                        Deja inscrit ! <a href="connexion.php"> connecter vous ici </a>
                                        </br>PS: ne pas mettre de 0 au numero
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                
            </section>
 
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