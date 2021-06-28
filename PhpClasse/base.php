<?php

class employe {
    protected $nom;
    protected $prenom;
    protected $annees;

    protected function getNom()
    {
        return $this->nom;
    }

    protected function getPrenom()
    {
        return $this->prenom;
    }
     protected function getAnnees()
    {
        return $this->annees;
    }


    protected function setNom($nom)
    {
        $this->nom = $nom;
    }

    protected function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
     protected function setAnnees($annees)
    {
        $this->annees = $annees;
    }
}