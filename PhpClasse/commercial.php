<?php

include_once "base.php";

class commercial extends employe {
    private $salaire_base;
    private $nb_ventes;

    public function __construct($nom, $prenom, $annees, $salaire_base, $nb_ventes)
    {
        $this->salaire_base = $salaire_base;
        $this->nb_ventes = $nb_ventes;
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAnnees($annees);
    }

    public function getSalaire_base()
    {
        return $this->salaire_base;
    }

    public function setSalaire_base($salaire_base)
    {
        $this->salaire_base = $salaire_base;
    }
    public function getNb_ventes()
    {
        return $this->nb_ventes;
    }

    public function setNb_ventes($nb_ventes)
    {
        $this->nb_ventes = $nb_ventes;
    }

    public function getNom()
    {
        return parent::getNom();
    }

    public function getPrenom()
    {
        return parent::getPrenom();
    }
      public function getAnnees()
    {
        return parent::getAnnees();
    }
     function calcul_commerciaux ()  
{
      
     
      $salaire_commercial =  $this->salaire_base + ($this->salaire_base * 0.03 * $this->annees);
      $salaire_commercial_2 =  $salaire_commercial + ( $this->nb_ventes * 100);
      echo "le salaire final de $this->prenom $this->nom est $salaire_commercial_2 euros";
      echo "<br/>";
 

    return ($salaire_commercial_2) ;
}

}