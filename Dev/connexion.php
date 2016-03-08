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
                 <?php if(!isset($_POST["valider"]) || isset($error))
                    { ?>
                    <form action="php/login.php" method="POST">


                         <div class="container" style="margin-top:40px">
                        <div class="row">
                            <?php if(isset($_GET['error'])){
                            ?><div class="alert alert-danger alert-dismissible" role="alert">
                            <i class="fa fa-warning"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <?php echo $_GET['error']; ?>
                            </div><?php
                            } ?>
                            
                            <div class="col-sm-6 col-md-4 col-md-offset-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <strong> <h2>Connexion </h2></strong>
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
                                                                    <i class="glyphicon glyphicon-user"></i>
                                                                </span> 
                                                                <input class="form-control" placeholder="Email"  type="email" name="email" id="email" autofocus>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="glyphicon glyphicon-lock"></i>
                                                                </span>
                                                                <input class="form-control" placeholder="Mot de Passe" type="password" name="password" id="password" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" class="btn btn-lg btn-primary btn-block" name="valider" value="Ok">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="panel-footer ">
                                        Pas de compte ! <a href="inscription.php" onClick=""> inscrivez vous ici </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





















                       <!--</br>
                            <div class="log"><label for="email">Email :</label> </td> <td> <input type="email" name="email" id="email" value="" /></div>
                            <div class="log"><label for="password">Password :</label> </td> <td> <input type="password" name="password" id="password" value="" /></div>
                            <div class="log"><label for="resterconnecter">Rester connecté<input type="checkbox" name="resterconnecter" id="resterconnecter" value="" />  </div>
                            
                            <div class="log-ok"><input type="submit" name="valider" value="Ok" /></div>-->
                            
                        
                    </form>
                    <?php
                    if(isset ($error))
                    {
                    echo "$error";
                    }
                    }
                    else
                    {
                    echo "Vous êtes Connecter";
                    }
                    ?>

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