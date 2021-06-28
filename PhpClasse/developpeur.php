<?php

include_once "base.php";

class developpeur extends employe {
    private $salaire_base;
    private $type_dev;

    public function __construct($nom, $prenom, $annees, $salaire_base, $type_dev)
    {
        $this->salaire_base = $salaire_base;
        $this->type_dev = $type_dev;
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
    public function getType_dev()
    {
        return $this->type_dev;
    }

    public function setType_dev($type_dev)
    {
        $this->type_dev = $type_dev;
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
    public function calcul_developpeur()     
{
      
 
      if($this->type_dev == "web-designer"){
           $salaire_developpeur =  $this->salaire_base;
      }
      elseif($this->type_dev == "front-end"){
           $salaire_developpeur = 1.10 * $this->salaire_base ;
      }
      elseif($this->type_dev == "back-end") {
           $salaire_developpeur_past =   1.10 * $this->salaire_base ;
           $salaire_developpeur =  1.25 * $salaire_developpeur_past ;
      }
       
      
      $salaire_developpeur = $salaire_developpeur + ($salaire_developpeur * 0.03 * $this->annees);
      echo "le salaire final de $this->prenom $this->nom est $salaire_developpeur euros";
      echo "<br/>";
 
    return ($salaire_developpeur) ;
}
    
}