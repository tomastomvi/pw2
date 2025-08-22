<?php 
class pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this ->nome = $nome;
        $this ->idade = $idade; 
    }

    public function apresentar(){
        echo "Nome:{ $this ->nome}, Idade:{$this ->idade} anos<br>";
    }
    
}
?>