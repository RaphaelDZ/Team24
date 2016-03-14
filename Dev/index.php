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
                <?php include('php/homepage-carousel.php'); ?>
                <?php include('php/homepage-services.php'); ?>
                <?php include('php/homepage-responsive.php'); ?>
                <?php include('php/homepage-users.php'); ?>
 
			<footer id="footer">
				<?php include ('php/footer.php'); ?>
			</footer>
		</div>

		<?php include('php/page-end.php');?>

	</body>
</html>