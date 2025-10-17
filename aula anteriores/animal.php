<?php
 class Animal {
     public $name;
     public $idade;

     public function __construct($name, $idade) {
         $this->name = $name;
         $this->idade = $idade;
     }

     public function fazersom() {
        echo "O SOM DESTE ANIMAL É: ";
     }
 }
?>