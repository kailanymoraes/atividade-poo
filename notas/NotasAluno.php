<?php
class Notas {
    private $nota1;
    private $nota2;
    private $nota3;
    private $nota4;
    private $media;
 
    public function __construct($n1, $n2, $n3, $n4) {
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
        $this->nota4 = $n4;
        $this->calcularMedia();
    }
 
    private function calcularMedia() {
        $this->media = ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
    }
 
    public function mostrarMedia() {
        return $this->media;
    }
}
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = $_POST['nota1'];
    $n2 = $_POST['nota2'];
    $n3 = $_POST['nota3'];
    $n4 = $_POST['nota4'];
 
    $notas = new Notas($n1, $n2, $n3, $n4);
    $media = number_format($notas->mostrarMedia(), 2);
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
</head>
<body>
    <h1>Resultado da Média do Aluno</h1>
    <p>Média do Aluno: <?php echo $media; ?></p>
    <a href="index.php">Voltar</a>
</body>
</html>