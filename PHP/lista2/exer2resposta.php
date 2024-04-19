<?php
    $numero = isset($_POST['numero']) ? $_POST['numero'] : array();
    $positivos = 0;
    $negativos = 0;
    $pares = 0;
    $impares = 0;
    $zeros = 0;

    foreach ($numero as $num) {
        $valor = $num['num'];
        if ($valor > 0) {
            $positivos++;
        } elseif ($valor < 0) {
            $negativos++;
        } elseif ($valor == 0) {
            $zeros++;
        }
        if ($valor % 2 == 0 && $valor != 0) {
            $pares++;
        } elseif ($valor != 0) {
            $impares++;
        }
    }

    echo "Positivos: $positivos ";
    echo "Negativos:  $negativos ";
    echo "Quantidade de zeros: $zeros ";
    echo "Pares: $pares <br>";
    echo "Ímpares: $impares ";
?>