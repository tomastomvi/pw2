<?php
require_once 'animal.php';

class Cachorro extends Animal {
    public $raca;

    public function __construct($name, $idade, $raca) {
        parent::__construct($name, $idade);
        $this->raca = $raca;
    }

    public function fazersom() {
        echo "O SOM DESTE CACHORRO É: AU AU AU<br>";
    }

 
   
}
?>