<?php
class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    // setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setQuantidade($estoque) {
        if($estoque < 0) {
            echo "Estoque inválido, não pode ser negativo.";
            return;
        }

        $this->estoque = $estoque;
    }

    // getters
    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getestoque() {
        return $this->estoque;
    }

    public function vender($quantidade) {
        if($quantidade > $this->estoque) {
            echo "Estoque insuficiente para vender $quantidade unidades.";
            return false;
        }

        $this->estoque -= $quantidade;
        return true;
    }
    
}
// Criando um produto
$produto = new Produto("Notebook", 3500.00, 10);
echo "Produto: " . $produto->getNome() . "<br>";


// Tentando vender 3 unidades  
if($produto->vender(3)) {
    echo "Venda realizada com sucesso!<br>";
} else {
    echo "Falha na venda.<br>";
}

$produto2 = new Produto("Smartphone", 1500.00, 5);
echo "Produto: " . $produto2->getNome() . "<br>";

// Tentando vender 7 unidades (mais do que o estoque)   
if($produto2->vender(7)) {
    echo "Venda realizada com sucesso!<br>";
} else {
    echo "Falha na venda.<br>";
}
?>