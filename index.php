<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>2015 — Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div id="accueil" class="page">   
        <header>
            <nav>
                <ul>
                    <li><a href="#">Présentation</a></li>
                    <li><a href="#">Expériences</a></li>
                    <li><a href="#">Compétences</a></li>
                    <li><a href="#">Réalisations</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
        <h1>Antoine Cantoro</h1>
        <h2>Webdesigner - Intégrateur Web</h2>
        <div id="btn-accueil">Continuer</div>
    </div>
    
    <div id="biographie" class="page">
        <h3>Biographie</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing      elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas .</p>
    </div>
    
    <div id="experiences" class="page">
        <h3>Expériences</h3>
    </div>
    
    <div id="competences" class="page">
        <h3>Compétences</h3>
        
    </div>
    
    <div id="realisations" >
        <h3>Réalisations</h3>
        
        <div id="liste-projets">
        
        <?php 
		// Variables
		$id = 1;
		if( isset( $_GET['id'] ) ) {
			$id_cat = $_GET['id'];
		}
		// Connexion à MySQL
		include 'cnx.php'; 
		// Générer la miniature
		$contenu_html = '<div';
		
		// Préparation d'une requête SQL
		// Sélectionner les champs id et nom dans la table categories
		$requete = $bdd->prepare( 'SELECT id, nom FROM projets ORDER BY id DESC LIMIT 0, 8 ');
		// Exécuter la requête
		$requete->execute();
		// Traitement du résultat de la requête	
		while ( $donnees = $requete->fetch() ) {
		    $contenu_html .=    "><a href=\"#\"  class=\"projets\">
                                    <div class=\"description\">
                                        <h3> ".$donnees['nom']." </h3>
                                    </div>
                                    <img src=\"images/".$donnees['id'].".png\">
                                 </a";
		}
		// Terminer le traitement de la requête
		$requete->closeCursor();

		$contenu_html .= '
        ><a href="#" class="projets">
                <div class="description">
                    <h3> Afficher d&#8217;autres de projets </h3>
                    <p> + </p>
                </div>
                <img src="images/img.png">
         </a>
        
         </div>';
		echo $contenu_html;

		?>
    </div>
    
    <div id="contact" class="page">
        <h3>Contact</h3>
    </div>

</body>
</html>