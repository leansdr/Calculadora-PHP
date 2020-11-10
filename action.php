<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>
<html>

<body>
    <form id="resultado">
        <div class="titulo">
            <h1>Resultado</h1>
            <hr>
        </div>
        <?php

    $num1 = $_POST['campo1'];
    $num2 = $_POST['campo2'];
    $sinal = $_POST['operacao'];

    switch ($sinal) {

      case "1":
        $resultado = $num1 + $num2;
        echo "<h3>A soma é " . $resultado . "</h3>";
        break;

      case "2":
        $resultado = $num1 - $num2;
        echo "<h3>A subtração é " . $resultado . "</h3>";
        break;

      case "3":
        $resultado = $num1 * $num2;
        echo "<h3>A multiplicação é " . $resultado . "</h3>";
        break;

      case "4":
        $resultado = $num1 / $num2;
        echo "<h3>A divisão é " . $resultado . "</h3>";
        break;
    }
    ?>
        <a href="index.php">Voltar</a>
    </form>
</body>

</html>