<?php
include("views/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'selectionnerMois':{
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		include("views/v_listeMois.php");
		break;
	}
	case 'voirEtatFrais':{
		$leMois = $_REQUEST['lstMois']; 
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$moisASelectionner = $leMois;
		include("views/v_listeMois.php");
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("views/v_etatFrais.php");
	}
	case 'FraisVisiteur': {
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$lesVisiteurs=$pdo->getLesVisiteurs();
		$lesTypes=$pdo->getLesTypes();
		$moisASelectionner = $lesCles[0];
		include("views/v_fraisvisiteur.php");
		break;

	}
	case 'voirEtatVisiteur':{

		$idVisiteur = $_REQUEST['lstVisiteur']; 
		$leType = $_REQUEST['lstType'];

		$lesVisiteurs=$pdo->getLesVisiteurs();
		$lesTypes=$pdo->getLesTypes();
		include("views/v_fraisvisiteur.php");
		//$moisASelectionner = $leMois;
		
		$lesInfos=$pdo->getLesInfos($idVisiteur,$leType);
	
	
		include("views/v_etatVisiteur.php");
	}
	
	case 'saisie':{
		$lesVisiteurs=$pdo->getIdVisiteur();
		$lesTypes=$pdo->getLesTypes();
	include("views/v_saisieFrais.php");
	break;
	}
}
?>