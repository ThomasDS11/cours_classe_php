<?php

include_once "base.php";

class intelligence extends employe {
    private $salaire_base;
    

    public function __construct($nom, $prenom, $annees, $salaire_base )
    {
        $this->salaire_base = $salaire_base;
       
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
     public function calcul_intelligence ()  
{
      if ($this->annees < 2 ) {
           $salaire_intelligence =   $this->salaire_base ;
      }  
      elseif($this->annees >= 2 && $this->annees <= 3 ){
           $salaire_intelligence =   1.10*$this->salaire_base ;
      }
      elseif($this->annees >= 4 && $this->annees <= 5   ){
           $salaire_intelligence =   1.15*$this->salaire_base ;
      }
        elseif($this->annees >= 6){
           $salaire_intelligence =   1.20*$this->salaire_base  ;
      }
       
      
      $salaire_intelligence = $salaire_intelligence + ($salaire_intelligence * 0.03 *  $this->annees);
      echo "le salaire final de $this->prenom $this->nom est $salaire_intelligence euros ";
      echo "<br/>";
 
    return ($salaire_intelligence) ;
}
}