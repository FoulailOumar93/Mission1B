<!-- Division pour le sommaire -->
<nav class="menuLeft">
    <ul class="menu-ul">
        <li class="menu-item"><a href="index.php">retour</a></li>

        <li class="menu-item">
            Visiteur :<br>
            <?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom'] ?>
        </li>

        
        <li class="menu-item">
            <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes
                fiches de frais</a>
        </li>

        <li class="menu-item">
            <a href="index.php?uc=etatFrais&action=FraisVisiteur" title="CumulMois">CumulMois</a>
        </li>
        
        <li class="menu-item">
            <a href="index.php?uc=saisie&action=saisie" title="Gestion Frais">Gestion Frais</a>
        </li>
    </ul>

        
        <li class="menu-item">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
    

</nav>

<section class="content">


