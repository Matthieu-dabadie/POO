<?php

class DbConnect
{
    private $host = '127.1.1.1';
    private $dbname = 'poo';
    private $user = 'root';
    private $password = '';
    private $connexion;

    public function __construct()
    {
        try {
            $this->connexion = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur de connexion à la base de données: " . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->connexion;
    }
}


// Instanciation de la classe DbConnect
$db = new DbConnect();

// Récupération de la connexion
$connection = $db->getConnection();

// Vérification de la connexion
if ($connection) {
    echo '<div class="bg-white bg-opacity-75 col-2 rounded">';
    echo '<p class="text-dark text-center">Connexion réussie !</p>';
    echo '</div>';
} else {
    echo "Erreur lors de la connexion.";
}
