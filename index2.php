<?php 
require_once 'index.php';

class Funcionario extends pessoa{
    public $cargo;

    public function __construct($nome, $idade, $cargo){
         parent::__construct($nome, $idade);
         $this->cargo = $cargo;

    }

    public function apresentar(){
        echo "Nome:{$this ->nome}, Idade:{$this ->idade} anos, Cargo: {$this->cargo}<br>";
    }



}
?>