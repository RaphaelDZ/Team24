<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php include('php/homepage-head.php'); ?>
	<link rel="stylesheet" type="text/css" href="css/offres.css"/>
  </head>

  <body>
      
    <!-- Navbar -->
    <?php include('php/nav.php'); ?>
	
	<!-- Tableau offres -->
	<table class="table">
	<thead>
		<tr>
			<td style="width:356px;"></td><td class="gratuit_premium" style="border-radius: 10px 0 0 0;">Compte Gratuit</td><td class="gratuit_premium">Compte Premium</td><td class="ecole">Compte </br>Ecole</td>
			<tbody>
				<tr class="cellule">
					<td class="cellule_rouge" style="border-radius: 10px 0 0 0;">Voir les annonces</td>
					<td class="cellule_interieur_rouge_clair"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
					<td class="cellule_interieur_rouge_clair"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
					<td class="cellule_interieur_rouge_clair"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
				</tr>
				<tr class="cellule">
					<td class="cellule_rouge_clair">Poster des annonces</td>
					<td class="cellule_interieur_rouge"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
					<td class="cellule_interieur_rouge"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
					<td class="cellule_interieur_rouge"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
				</tr>
				<tr class="cellule">
					<td class="cellule_rouge">R&eacute;pondre a une annonce</td>
					<td class="cellule_interieur_rouge_clair"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
					<td class="cellule_interieur_rouge_clair"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
					<td class="cellule_interieur_rouge_clair"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
				</tr>
				<tr class="cellule">
					<td class="cellule_rouge_clair">Noter une annonce</td>
					<td class="cellule_interieur_rouge"><img class="centrage" src="img/icone_non.png" width="26" height="25" alt="Non"/></td>
					<td class="cellule_interieur_rouge"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
					<td class="cellule_interieur_rouge"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
				</tr>
				<tr class="cellule">
					<td class="cellule_rouge">Limite pour poster des annonces</td>
					<td class="cellule_interieur_rouge_clair police">Limit&eacute;e</td>
					<td class="cellule_interieur_rouge_clair police">Illimit&eacute;e</td>
					<td class="cellule_interieur_rouge_clair police">Illimit&eacute;e</td>
				</tr>
				<tr class="cellule">
					<td class="cellule_rouge_clair">Page de profil p&eacute;rsonnalis&eacute;e</td>
					<td class="cellule_interieur_rouge"><img class="centrage" src="img/icone_non.png" width="26" height="25" alt="Non"/></td>
					<td class="cellule_interieur_rouge"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
					<td class="cellule_interieur_rouge"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
				</tr>
				<tr class="cellule">
					<td class="cellule_rouge" style="border-radius: 0 0 0 10px;">Publicit&eacute;</td>
					<td class="cellule_interieur_rouge_clair"><img class="centrage" src="img/icone_oui.png" width="26" height="25" alt="Oui"/></td>
					<td class="cellule_interieur_rouge_clair"><img class="centrage" src="img/icone_non.png" width="26" height="25" alt="Non"/></td>
					<td class="cellule_interieur_rouge_clair"><img class="centrage" src="img/icone_non.png" width="26" height="25" alt="Non"/></td>
				</tr>
				<tr class="cellule">
					<td class="cellule_vide" style="border-radius: 0 0 0 10px;"></td>
					<td class="cellule_interieur_rouge police" style="border-radius: 0 0 0 10px;"><a href="souscription.html" style="color: black">Gratuit</a></td>
					<td class="cellule_interieur_rouge police"><a href="souscription.html" style="color: black">_€/mois</a></td>
					<td class="cellule_interieur_rouge police" style="border-radius: 0 0 10px 0;"><a href="souscription.html" style="color: black">_€/an</a></td>
				</tr>
			</tbody>
		</tr>
	</thead>
</table>

    <!-- Footer -->
    <?php include('php/footer.php'); ?>


   <?php include('php/end.php'); ?>
  </body>
</html>