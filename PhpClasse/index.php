<!DOCTYPE html>
   <?php
include_once "developpeur.php";
include_once "commercial.php";
include_once "intelligence.php";
    ?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
      $Alexandre_Peneau = new commercial("Peneau", "Alexandre", 2, 2100, 2);
      $Alexandre_Peneau->calcul_commerciaux();
      $Jean_Banou = new commercial("Banou", "Jean", 5, 2100, 4);
      $Jean_Banou->calcul_commerciaux();
      $Julie_Diderot = new intelligence("Diderot", "Julie", 7, 2200);
      $Julie_Diderot->calcul_intelligence();
      $Amelie_Poudlard = new developpeur("Peneau", "Alexandre", 5, 2400, "back-end");
      $Amelie_Poudlard->calcul_developpeur();
      $Sophie_Malais = new developpeur("Malais", "Sophie", 3, 2400, "front-end");
      $Sophie_Malais->calcul_developpeur();
      $Henry_Batec = new developpeur("Batec", "Henry", 2, 2400, "web-designer");
      $Henry_Batec->calcul_developpeur();
   
       
        ?>
    </body>
</html>
