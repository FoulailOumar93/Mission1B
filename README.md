# Mission 1B

## Installation des Tables de la Base de Données
## Informations Générales :

# Formation(s) Concernée(s) : BTS Services Informatiques aux Organisations

# Matière(s) :

     Bloc 1 – Support et mise à disposition de services informatiques
     Bloc 2 SLAM – Conception et développement d’applications
     Bloc 3 SLAM – Cybersécurité des services informatiques

## Présentation : Ce document guide à travers l'installation des tables de la base de données sans décrire pas-à-pas l'installation de l'environnement de travail.

## Savoirs : Gestion de version

## Compétences : Adaptation aux différents types de ressources comme le labo et exolab

## Transversalité : Interaction entre SLAM et SISR

## Prérequis : Installation de la base de données complétée dans la mission 1.A.

## Outils : Git, EasyPhp, Visual Studio Code

## Mots-clés : Php, MySQL, MVC, POO, PDO, git, GitLab

## Configuration équipe : Travail individuel

Durée : Mission 2 / 5 - Mission 1.B
Mission 1.B - Visualisation des Frais
Objectif

## Réaliser un formulaire de visualisation pour un mois et une année spécifiques afin de montrer le cumul des frais pour un type de frais donné.
Contraintes

    Respecter l'architecture MVC.
    Inclure un lien vers le formulaire dans la page d'accueil.
    Utilisation d'un fichier CSS pour le style.

## Travail à Faire

    Écrire le Cas d'Utilisation : S'inspirer de l'exemple fourni en Annexe 1.
    Développement : Écrire le code nécessaire pour implémenter le formulaire de visualisation selon les contraintes énoncées.

# Annexe 1 : Exemple de Cas d'Utilisation

## Projet : Application web de gestion des frais

## Nom du Cas d'Utilisation : Se Connecter

## Acteur Déclencheur : Visiteur médical ou Comptable

## Scénario Nominal :

    Le système affiche un formulaire de connexion.
    L'utilisateur saisit son login et son mot de passe puis valide.
    Le système vérifie les informations et active le profil Visiteur ou Comptable, tout en maintenant l'identité visible de l'utilisateur connecté.

# Exceptions :

    Si les informations de connexion ne sont pas valides :
    Le système informe l'utilisateur et retourne à l'étape 1.
    L'utilisateur demande à se déconnecter.
    Le système déconnecte l'utilisateur.
