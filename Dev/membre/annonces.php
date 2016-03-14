<?php
session_start();
include_once("../php/bdd.php");
function recup_article()	
{
    require ("../php/bdd.php");
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

?>
<!DOCTYPE html>
<html>
	<head>

		<?php include ('../php/co-head.php');?>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<?php include('../php/nav-c.php'); ?>
			</header>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Demandes</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts">
                                
                               <?php  $articles = recup_article();
		foreach ($articles as $article) 
		{
            $data= user_info($article['id_user']);
            $pseudo = $data['pseudo'];
            $numero = $data['numero'];
            $email = $data['email']; ?>

								<article class="post post-medium">
									<div class="row">

										<div class="col-md-5">
											<div class="post-image">
												<div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
													<div>
														<div class="img-thumbnail">
															<img class="img-responsive" src="img/blog/blog-image-1.jpg" alt="">
														</div>
													</div>
													<div>
														<div class="img-thumbnail">
															<img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">

												<h2><a href=""><?php echo $article['titre_article']; ?></a></h2>
												<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="post-meta">
												<span><i class="fa fa-calendar"></i> 01/01/19970 </span>
												<span><i class="fa fa-user"></i> Par <a href="#">Pierre DUPONT</a> </span>
												<span><i class="fa fa-tag"></i> <a href="#">Jeux-vidos</a> </span>
												<span><i class="fa fa-comments"></i> <a href="#">Commentaires</a></span>
												<a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Plus d'infos</a>
											</div>
										</div>
									</div>

								</article>

								

								<?php }
}


		?>

								<ul class="pagination pagination-lg pull-right">
									<li><a href="#">«</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">»</a></li>
								</ul>

							</div>
						</div>

						<div class="col-md-3">
							<aside class="sidebar">
							
								
							
								<hr>
							
								<h4 class="heading-primary">Catégories</h4>
								<ul class="nav nav-list mb-xlg">
									<li><a href="#">Évènements</a></li>
									<li><a href="#">Cours</a></li>
									<li><a href="#">Sports</a></li>
									<li><a href="#">Informatique</a></li>
                                    <li><a href="#">Cuisine</a></li>
                                    <li><a href="#">Bricolage</a></li>
                                    <li><a href="#">Jeux-vidéos</a></li>
                                    <li><a href="#">Electroménager</a></li>
                                    <li><a href="#">Vêtements</a></li>
                                    <li><a href="#">Véhicules</a></li>
                                    <li><a href="#">Musique</a></li>
                                    <li><a href="#">Autre</a></li>
								</ul>
							
							
								<hr>
							
								<h4 class="heading-primary">Á propos</h4>
								<p>Texte multiligne de présentation.</p>
							
							</aside>
						</div>
					</div>

				</div>

			</div>

			<footer id="footer">
				<?php include('../php/footer-c.php');?>
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
