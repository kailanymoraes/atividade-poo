<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas dos Alunos</title>
</head>
<body>
    <h1>Notas dos Alunos</h1>
    <form action="NotasAluno.php" method="post">
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="0.01" required><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="0.01" required><br>
        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" step="0.01" required><br>
        <label for="nota4">Nota 4:</label>
        <input type="number" id="nota4" name="nota4" step="0.01" required><br>
        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>