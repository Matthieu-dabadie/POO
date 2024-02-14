<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include 'pages/header.html';
include 'pages/nav.html';

switch ($page) {
    case 'add':
        include 'php/add.php';
        break;
    case 'charactersList':
        include 'php/charactersList.php';
        break;
    case 'classList':
        include 'php/classList.php';
        break;
    case 'game':
        include 'php/game.php';
        break;
    case 'Personnage':
        include 'php/Personnage.php';
        break;
    case 'personnageManager':
        include 'php/PersonnageManager.php';
        break;
    case 'form':
        include 'pages/form.html';
        break;
    case 'home':
        include 'includes/home.php';
        break;
    case 'DbConnect':
        include 'includes/DbConnect.php';
        break;
    default:
        echo 'Page non trouvée';
        break;
}

include 'pages/footer.html';
