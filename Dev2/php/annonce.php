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

    <table align="center" width="100%">
        <td align="left">
            <img src="http://4.bp.blogspot.com/-2Z6AlFgzp08/UheHBWUXi-I/AAAAAAAAADo/U7twcKl5fco/s1600/Image13.png"
                 width="500px" height="1000px">
        </td>


        <td align="center">


            <h1>ANNONCE</h1>


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
                    <li>
                        <h4>posteur</h4>
                    </li>
                    <li>
                        <h4>Catégories</h4>
                        <p>a définir (obligatoire)</p>
                    </li>
                    <li>
                        <h4>Description</h4>
                        <p>a définir (non obligatoire)</p>
                    </li>
                    <li>
                        <h4>date</h4>
                        <p>17/03/2016 11:00</p>
                    </li>
                </ul>
            </div>

            <input value="Poster une annonce" aria-label="Recherche Google" type="submit">


        </td>
        <td align="right">
            <img src="http://www.passeportetudiant71.fr/images/etudiant.jpg" width="500px" height="1000px">
        </td>
        </tr></tbody></table>
    <footer id="footer">
        <?php include('public/php/footer.php'); ?>
    </footer>
</div>

<?php include('oublic/php/page-end.php'); ?>


</body>
</html>
