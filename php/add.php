<?php
require_once('../includes/DbConnect.php');
require_once('Personnage.php');
require_once('PersonnageManager.php');

// Vérifier si la requête est une méthode POST
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Récupération des données du formulaire
    $nom = $_GET['nom'];
    $classe = $_GET['classe'];
    $civilisation = $_GET['civilisation'];
    $puissance = $_GET['puissance'];
    $endurance = $_GET['endurance'];
    $orientation = $_GET['orientation'];
    $resistance = $_GET['resistance'];

    // Création d'une instance de DbConnect
    $dbConnect = new DbConnect();
    $connexion = $dbConnect->getConnection();

    // Création d'une instance de Personnage
    $personnage = new Personnage();

    // Attribution des valeurs
    $personnage->setNom($nom);
    $personnage->setClasse($classe);
    $personnage->setCivilisation($civilisation);
    $personnage->setPuissance($puissance);
    $personnage->setEndurance($endurance);
    $personnage->setOrientation($orientation);
    $personnage->setResistance($resistance);

    // Création d'une instance de PersonnageManager
    $personnageManager = new PersonnageManager($connexion);
    // Ajout du personnage
    $personnageManager->add($personnage);
    echo '<script>window.location.href = "../index.php";</script>';
}
