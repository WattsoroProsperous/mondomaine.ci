
<?php
date_default_timezone_set("Europe/London");
if (isset($_GET['md'])){
//error_reporting(E_ALL ^ E_NOTICE);
$var = $_GET['md'];
switch ($var){
	case "order":
        $page = "order.inc.php";
		$NomPage ="Réserver Votre Nom de Domaine";
		$SlideIndex = '1';
		$titre = "mondomaine.ci";
        break;
		case "forfait":
			$page = "forfaitHeberg.inc.php";
			$NomPage ="Réserver Votre Nom de Domaine";
			$SlideIndex = '1';
			$titre = "mondomaine.ci";
			break;
			case "achat":
				$page = "achat.php";
				$NomPage ="Réserver Votre Nom de Domaine";
				$SlideIndex = '1';
				$titre = "mondomaine.ci";
				break;
				case "contact":
					$page = "contact.inc.php";
					$NomPage ="Réserver Votre Nom de Domaine";
					$SlideIndex = '1';
					$titre = "mondomaine.ci";
					break;
	 


	default ;
        $page = "index.inc.php";
		$NomPage ="Accueil";
		$SlideIndex = '1';
		$titre = "mondomaine.ci";
        break;

}

}else { 
	$page = "index.inc.php";
	$NomPage ="Accueil";
	$SlideIndex = '1';
	$titre = "mondomaine.ci";
	}
?>


<?php
//G�n�rer une chaine de caract�re unique et al�atoire

function random($car) {
	$string = "";
	$chaine = "abcdefghijklmnpqrstuvwxy0123456789";
	srand((double)microtime()*1000000);
	for($i=0; $i<$car; $i++) {
	$string .= $chaine[rand()%strlen($chaine)];
	}
	return $string;
}

// APPEL
// Génére une chaine de longueur 20

$chaine = random(15);
// Explode la date en different format

function datefr($date) {
    $date = (explode(' ', $date, 2));
	$dateDuJour = $date[0];
	$heureDuJour = $date[1];
	$sequenceDuJour = explode('-', $dateDuJour);
	$annee = $sequenceDuJour[0];
    $mois = $sequenceDuJour[1];
    $jour = $sequenceDuJour[2];

    return $jour."/".$mois."/".$annee ;
}

// Tronquer une caine de caract�res 

function tronquer($max_caracteres, $Chaine)
{
	//nombre de caract�res � afficher
	// Test si la longueur du texte d�passe la limite
	if (strlen($Chaine)>$max_caracteres)
	{    
		//$max_caracteres = 30;
		// S�l�ction du maximum de caract�res
		$Chaine = substr($Chaine, 0, $max_caracteres);
		// R�cup�ration de la position du dernier espace (afin d�viter de tronquer un mot)
		$position_espace = strrpos($Chaine, " ");    
		$Chaine = substr($Chaine, 0, $position_espace);    
		// Ajout des "..."
		$Chaine = $Chaine."...";
	}
	return $Chaine;
}
	

?>

