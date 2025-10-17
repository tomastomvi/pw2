<?php
class alunoacademia{
    private $nome;
    private $peso;
    private $altura;

    public function __construct($nome, $peso, $altura){
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
    }
    // setters 
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setPeso($peso){
        if(strlen($peso) > 30 ){
            echo "Peso inválido, minimo  de 30 kg.";
        }
    $this->peso = $peso;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    // getters  
    public function getNome(){
        return $this->nome;
    }

    public function getPeso(){
        return $this->peso;
    }       

    public function getAltura(){
        return $this->altura;
    }

    public function calcularIMC(){
        return $this->peso / ($this->altura * $this->altura);
    }


    
}

// Criando um aluno da academia
$carlos = new Alunoacademia("Carlos Silva", 85, 1.75);
$carlos->setNome("Carlos Silva");
$carlos->setPeso(85);
$carlos->setAltura(1.75);

// Exibindo os detalhes do aluno e seu IMC
echo "Nome do Aluno: " . $carlos->getNome() . "<br>";
echo "IMC: " . number_format($carlos->calcularIMC(), 2,',', '.');

?>
