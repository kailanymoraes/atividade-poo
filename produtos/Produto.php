<?php
class Produto {
    private $nome;
    private $precoCompra;
    private $precoVenda;
    private $validade;
 
    public function __construct($nome, $precoCompra, $validade) {
        $this->nome = $nome;
        $this->precoCompra = $precoCompra;
        $this->validade = $validade;
        $this->calcularPrecoVenda();
    }
 
    private function calcularPrecoVenda() {
        $this->precoVenda = $this->precoCompra * 1.30; // 30% a mais que o preço de compra
    }
 
    public function mostrarProduto() {
        return [
            'nome' => $this->nome,
            'precoCompra' => number_format($this->precoCompra, 2),
            'precoVenda' => number_format($this->precoVenda, 2),
            'validade' => $this->validade
        ];
    }
}
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $precoCompra = $_POST['precoCompra'];
    $validade = $_POST['validade'];
 
    $produto = new Produto($nome, $precoCompra, $validade);
    $detalhesProduto = $produto->mostrarProduto();
}
?>