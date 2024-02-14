<?php

class Personnage
{
    private $nom;
    private $classe;
    private $civilisation;
    private $puissance;
    private $endurance;
    private $orientation;
    private $resistance;

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function setCivilisation($civilisation)
    {
        $this->civilisation = $civilisation;
    }

    public function getCivilisation()
    {
        return $this->civilisation;
    }

    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    public function getPuissance()
    {
        return $this->puissance;
    }

    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    public function getOrientation()
    {
        return $this->orientation;
    }

    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
    }

    public function getResistance()
    {
        return $this->resistance;
    }
}
