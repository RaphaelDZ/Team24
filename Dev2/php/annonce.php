<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Système de recherche</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="annonce.css">
    <?php include('public/php/homepage-head.php'); ?>
</head>
<body>
<div class="body">
    <header id="header"
            data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
        <?php include('public/php/nav.php'); ?>
    </header>

    <div align="center">
        


        <div class="header-search hidden-xs">
            <form id="searchForm" action="page-search-results.html" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Rechercher" required>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search">OK</i></button>
                    </span>
                </div>
            </form>
        </div>


        <div>
            <h2>annonce 1</h2>
            <ul>
                <?php include('application/views/v_home_co.php'); ?>


            </ul>
        </div>

        <input value="Poster une annonce" aria-label="Recherche Google" type="submit">


    </div>
    <footer id="footer">
        <?php include('public/php/footer.php'); ?>
    </footer>
</div>

<?php include('public/php/page-end.php'); ?>


</body>
</html>
