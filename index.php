<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Dia</title>
</head>
<body>

    <?php
        echo 'Olá PHP!';
        echo '<br>';

        $nome = 'Lemuel';
        echo $nome;
        echo '<br>';

        $n1 = 10;
        $n2 = 100;
        echo $n1 + $n2;
        echo '<br>';

        $resultado = $n1 + $n2;
        echo 'Resultado da SOMA é: ' . $resultado;
        echo '<br>';

        if ($resultado > 50) {
            echo '<h3> MAIOR DO QUE 50! </h3>';
        } else {
            echo '<h3> MENOR OU IGUAL A 50! </h3>';
        }
    ?>

    <br>
    <br>
    <h1>Olá UC13!</h1>
    <h2>Lemuel</h2>
    <h3>Karina</h3>
    <h4>Manuela</h4>
    <h5>Giovani</h5>
</body>
</html>