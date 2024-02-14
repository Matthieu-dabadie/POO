<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


class CharacterList
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function displayCharacters()
    {
        $query = "SELECT * FROM personnage";

        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $characters = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Affiche la liste des personnages en carte+bootstrap.
            echo '<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">';

            foreach ($characters as $character) {
                $classImageName = $character['classe'] . '.png';

                echo '<div class="col">';
                echo '<div class="card m-3 custom-card" style="width: 18rem; background-image: url(\'assets/' . $classImageName . '\'); background-size: cover; opacity: 0.8;">';
                echo '<div class="card-body">';

                echo '<h5 class="card-title  text-light">' . $character['nom'] . '</h5>';

                echo '<p class="card-text  text-light">Classe: ' . $character['classe'] . '</p>';

                echo '<p class="card-text text-light">Civilisation: ' . $character['civilisation'] . '</p>';

                echo '<p class="card-text text-light">Puissance: ' . $character['puissance'] . ' | Endurance: ' . $character['endurance'] . '</p>';

                echo '<p class="card-text text-light">Orientation: ' . $character['orientation'] . ' | Resistance: ' . $character['resistance'] . '</p>';

                echo '<a href="index.php?page=game';

                foreach ($character as $key => $value) {
                    echo '&' . $key . '=' . $value;
                }
                echo '" class="btn btn-primary">Jouer</a>';
                echo '</div></div>';
                echo '</div>';
            }

            echo '</div>';
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}

include 'includes/DbConnect.php';
$db = new DbConnect();
$db = $db->getConnection();

if (!$db) {
    die("La connexion à la base de données a échoué.");
}

$characterList = new CharacterList($db);

$characterList->displayCharacters();
