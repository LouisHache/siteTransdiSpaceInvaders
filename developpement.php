<html>
<?php

	/* include */
    include "include/head.php";
	
?>
    <div class="container">
		<!-- Présentation du site -->
		<div class="bg-faded p-4 my-4">
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0"> <strong>Head Tracking </strong></h2>
			<hr class="divider"><br>
			<div class="row">
				<div class="col-lg-6">
					<img src="https://compass-ssl.xbox.com/assets/89/a6/89a6cdd2-28f5-4b62-a4cd-88d910954d7e.jpg?n=X1-Kinect-Sensor_Feature-1400_Voice-Commands_800x450.jpg" 
					class="img-fluid center" alt="image de la kinect V2">
					<p><strong>Kinect V2</strong></p>
				</div>
				<div class="col-lg-6">
					<strong>La Kinect V2 est le capteur que nous utilisons pour capter les mouvements de la tête des deux joueurs.</strong><br/><br/>
					Elle dispose d'une caméra et de plusieurs capteurs infrarouge. 
					La librairie fournit avec de Microsoft nous permet de traiter les données de ces capteurs afin d'obtenir les positions dans l'espace des joueurs. 
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<strong>Nous utilisons les angles d'Euler pour décrire les mouvements de la tête.</strong></br></br>
					La librairie de Microsoft nous donne la position de la tête sous la forme d'un Quaternion que nous convertissons en angle d'Euler afin
					de rendre les données plus simple à manipuler.
				</div>
				<div class="col-lg-6">
					<img src="https://www.researchgate.net/profile/Alberto_Fernandez21/publication/309543534/figure/fig3/AS:423204863909902@1477911310995/Head-pose-can-be-decomposed-in-pitch-yaw-and-roll-angles.png" 
					class="img-fluid center" alt="Mouvement de la tête (yaw roll pitch)">
					<p>
					<strong>Mouvement de la tête</strong>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Projection_orthogonale_point_sur_droite_dans_plan_proprietes.svg/220px-Projection_orthogonale_point_sur_droite_dans_plan_proprietes.svg.png" 
					class="img-fluid center" alt="Projection d'un point sur un plan">
					<p>
					<strong>Projection de la tête sur le plan de l'écran</strong>
					</p>
				</div>
				<div class="col-lg-6">
					<strong>Nous obtenons l'endroit où la personne regarde à l'écran.</strong></br></br>
					On cherche la normal au plan qui passe par le point centrale de la tête de la personne.
					Puis à l'aide de la position angulaire de la tête, nous obtenons là où regarde la personne sur l'écran.
				</div>
			</div>
		</div>
		
		<div class="bg-faded p-4 my-4">
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0"> <strong>Le jeu </strong></h2>
			<hr class="divider"><br>
			
			Nous avons séparé le développement du jeu en 4 modules :
			<ul>
				<li>Gestion de la génération des ennemis</li>
				<li>Gestion de la prise de dégats</li>
				<li>Gestion du score</li>
				<li>Gestion des canons et des balles</li>
			</ul>
			<img src="images/imageJeu.png" alt="screenshot" class="img-center img-fluid">
			<br>
			<p>
			<div class = "row">
				<div class="col-lg-6">
				<br>
					<strong>Gestion de la génération des ennemis</strong><br>
					Nous avons créé 3 scripts permettant la génération d'ennemis : <br>
						un permettant la génération aléatoire des dits ennemis<br>
						un permettant la génération et l'enregistrement des positions de spawn générées<br>
						un permet la génération d'ennemis à partir d'un script<br>
				</div>
				<div class="col-lg-6">
					<br>
					<strong>Gestion de la prise de dégats</strong><br>
						L'ennemi alpha est supprimé dès qu'il entre en contact avec une balle.<br>
						L'ennemi bêta est éliminé dès lors qu'il est touché par 2 balles provenant de chaque joueur dans un intervalle de temps restreint<br>
				</div>
			</div>
		</div>
		<div class="bg-faded p-4 my-4">
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0"> <strong>Scriptage d'une partie </strong></h2>
			<hr class="divider"><br>
			<p>
				Méthode : 
					génération aléatoire d'une partie pendant une certaine durée et enregistrement des positions générées pour toutes les vagues dans un fichier texte<br>
					ajout des évenements scriptés à la main <br>
					réalisation du symetrique à ajouter à la fin du fichier texte<br>
				Le script de génération des ennemis est prêt à etre utiliser.<br>
				Nous avions prévus au départ dans le protocole de réaliser des partie de 10 minutes (20 minutes au total pour les 2 configurations). Nous nous sommes vite rendu compte que cela etait beaucoup trop long, nous avons donc divisé ce temps par 2.<br>
				<strong>Les évenements scriptés </strong><br> De manière reguliere nous declenchons les evenements suivants :<br>
				- apparition de l'ennemi beta a gauche(*2)<br>
				- apparition de l'ennemi beta a droite  (*2)<br>
				- apparition de l'ennemi beta au centre<br>
				- surcharge à droite (*2)<br>
				- surcharge à gauche (*2)<br>

			</p>
			</div>
			<div class="bg-faded p-4 my-4">
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0"> <strong>Sauvegarde des données </strong></h2>
			<hr class="divider"><br>
			<div class="row">
				<div class="col-lg-6">
					<img src="https://compass-ssl.xbox.com/assets/89/a6/89a6cdd2-28f5-4b62-a4cd-88d910954d7e.jpg?n=X1-Kinect-Sensor_Feature-1400_Voice-Commands_800x450.jpg" 
					class="img-fluid center" alt="image de la kinect V2">
					<p><strong>Kinect V2</strong></p>
				</div>
				<div class="col-lg-6">
					<strong>La Kinect V2 est le capteur que nous utilisons pour capter les mouvements de la tête des deux joueurs.</strong><br/><br/>
					Elle dispose d'une caméra et de plusieurs capteurs infrarouge. 
					La librairie fournit avec de Microsoft nous permet de traiter les données de ces capteurs afin d'obtenir les positions dans l'espace des joueurs. 
				</div>
			</div>
		</div>
    </div>
	<br><br>

<?php
    include "include/footer.php";
?>