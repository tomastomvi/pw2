<?php
class Pedido {
    private $saborDoBolo;
    private $quantidade;
    private $valorUnitario;


    public function __construct($saborDoBolo, $quantidade, $valorUnitario) {
        $this->saborDoBolo = $saborDoBolo;
        $this->quantidade = $quantidade;
        $this->valorUnitario = $valorUnitario;
    }

    // setters
    public function setSaborDoBolo($saborDoBolo) {
        $this->saborDoBolo = $saborDoBolo;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setValorUnitario($valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }

    // getters
    public function getSaborDoBolo() {
        return $this->saborDoBolo;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getValorUnitario() {
        return $this->valorUnitario;
    }

    // metodo calc
    public function calcularValorTotal() {
        return $this->quantidade * $this->valorUnitario;
    }
}

// Criando um pedido
$pedido = new Pedido("Baunilha", 4, 18.00);

// Exibindo os detalhes do pedido
echo "Sabor do Bolo: " . $pedido->getSaborDoBolo() . "<br>";
echo "Valor Total: R$ " . number_format($pedido->calcularValorTotal(), 2,',', '.');
?>