<!DOCTYPE html>
<html>

<head>
    <title>Fibonacci</title>
</head>

<body>

    <?php
    // Função para encontrar a sequência de Fibonacci até o número digitado
    function fibonacci($numeroInformado)
    {
        // Inicializar a sequência de Fibonacci com os dois primeiros números, caso o número passado por parametro for zero o array é 0
        if ($numeroInformado != 0)
            $fibonacci = array(0, 1);
        else {
            $fibonacci = array(0);
        }

        // Enquanto o último número da sequência for menor ou igual ao número informado, calcula o próximo número Fibonacci
        while ($fibonacci[count($fibonacci) - 1] < $numeroInformado) {
            $proximoNumeroFibonacci = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
            if ($proximoNumeroFibonacci > $numeroInformado)
                break;
            array_push($fibonacci, $proximoNumeroFibonacci);
        }

        // Verificar se o número informado pertence ou não à sequência de Fibonacci
        if (in_array($numeroInformado, $fibonacci)) {
            echo $numeroInformado . " pertence à sequência de Fibonacci.";
        } else {
            echo $numeroInformado . " não pertence à sequência de Fibonacci.";
        }

        // Imprimir a sequência de Fibonacci até o número informado com 'implode' para simplificar ao invés de um laço For
        echo "<br>A sequência de Fibonacci até " . $numeroInformado . " é: " . implode(", ", $fibonacci);
    }

    // Verificação do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter o número informado
        $numeroInformado = $_POST["n"];

        // Encontrar a sequência de Fibonacci até o número informado e verificar se pertencia a sequência, bem como evitar valores inválidos
        if ($numeroInformado != "" && $numeroInformado >= 0)
            fibonacci($numeroInformado);
        else
            echo "Erro! Insira um número válido.";
    }
    ?>
    <!-- Formulário Simples para acionar a função fibonacci !-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Digite um número para achar a sequência de Fibonacci até:</label>
        <input type="number" name="n">
        <input type="submit" value="Calcular">
    </form>

</body>

</html>