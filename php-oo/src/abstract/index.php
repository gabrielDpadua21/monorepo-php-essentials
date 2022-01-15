<?php

 abstract class Hero {

     public function power($power) {
         echo "My power is: ".$power;
     }

     public function secretId($id) {

         echo $id." id my secret id";

     }

 }

 class Batman extends Hero {

     public function getBatmovel() {
         echo "running in batmovel";
     }
 }

 $h1 = new Batman();

 $h1->power("Money");

 echo "\n";

 $h1->secretId("Bruce Wane");

 echo "\n";

 $h1->getBatmovel();