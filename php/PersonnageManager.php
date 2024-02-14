<?php


class PersonnageManager
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function add($personnage)
    {
        try {
            $stmt = $this->connexion->prepare("INSERT INTO personnage (nom, classe, civilisation, puissance, endurance, orientation, resistance) VALUES (:nom, :classe, :civilisation, :puissance, :endurance, :orientation, :resistance)");

            $nom = $personnage->getNom();
            $classe = $personnage->getClasse();
            $civilisation = $personnage->getCivilisation();
            $puissance = $personnage->getPuissance();
            $endurance = $personnage->getEndurance();
            $orientation = $personnage->getOrientation();
            $resistance = $personnage->getResistance();

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':classe', $classe);
            $stmt->bindParam(':civilisation', $civilisation);
            $stmt->bindParam(':puissance', $puissance);
            $stmt->bindParam(':endurance', $endurance);
            $stmt->bindParam(':orientation', $orientation);
            $stmt->bindParam(':resistance', $resistance);

            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
        }
    }
}
