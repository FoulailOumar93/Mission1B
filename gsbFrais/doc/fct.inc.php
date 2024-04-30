<?php
/**
 * Fonctions pour l'application GSB

 * @package default
 * @author Cheri Bibi
 * @version    1.0
 */
/**
 * Teste si un quelconque visiteur est connecté
 * @return bool 'Vrai ou faux
 */
function estConnecte(){
  return isset($_SESSION['idVisiteur']);
}
/**
 * Enregistre dans une variable session les infos d'un visiteur

 * @param $id
 * @param $nom
 * @param $prenom
 */
function connecter($id,$nom,$prenom){
	$_SESSION['idVisiteur']= $id;
	$_SESSION['nom']= $nom;
	$_SESSION['prenom']= $prenom;
}
/**
 * Détruit la session active
 */
function deconnecter(){
	session_destroy();
}

/**
 * Transforme une date au format français jj/mm/aaaa vers le format anglais aaaa-mm-jj
 * @param $maDate
 * @return string 'la date au format anglais aaaa-mm-jj
 */
function dateFrancaisVersAnglais($maDate){
	@list($jour,$mois,$annee) = explode('/',$maDate);
	return date('Y-m-d',mktime(0,0,0,$mois,$jour,$annee));
}

/**
 * Transforme une date au format anglais aaaa-mm-jj vers le format français jj/mm/aaaa
 * @param $maDate
 * @return string 'La date au format français jj/mm/aaaa
 */
function dateAnglaisVersFrancais($maDate){
	@list($annee,$mois,$jour)=explode('-',$maDate);
	$date="$jour"."/".$mois."/".$annee;
	return $date;
 }
 /**



/**
 * Ajoute le libellé d'une erreur au tableau des erreurs

 * @param $msg : le libellé de l'erreur
 */
function ajouterErreur($msg){
   if (! isset($_REQUEST['erreurs'])){
      $_REQUEST['erreurs']=array();
	}
   $_REQUEST['erreurs'][]=$msg;
}

/**
 * Retourne le nombre de lignes du tableau des erreurs
 * @return int 'Le nombre d'erreurs
 */
function nbErreurs(){
   if (!isset($_REQUEST['erreurs'])){
	   $nb= 0;
	}
	else{
	   $nb= count($_REQUEST['erreurs']);
	}
    return $nb;
}
