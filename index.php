<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora em PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form action="action.php" method="post">
        <div class="titulo">
            <h1>Calculadora</h1>
            <hr>
        </div>
        <label for="campo1">Digite o primeiro número: </label>
        <input type="number" name="campo1" id="campo1" required /></br></br>
        <label for="campo2">Digite o segundo número: </label>
        <input type="number" name="campo2" id="campo2" required /></br>

        <p>Escolha a operação:</p>

        <input type="radio" id="soma" name="operacao" value="1">
        <label for="soma">Soma</label><br>

        <input type="radio" id="subtracao" name="operacao" value="2">
        <label for="subtracao">Subtração</label><br>

        <input type="radio" id="multiplicacao" name="operacao" value="3">
        <label for="multiplicacao">Multiplicação</label><br>

        <input type="radio" id="divisao" name="operacao" value="4">
        <label for="divisao">Divisão</label></br></br>
        <hr>
        <input type="submit" value="Calcular" />
    </form>
</body>

</html>