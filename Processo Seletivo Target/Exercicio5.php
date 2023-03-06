<?php
$string = "Vou ser o novo estagiario da Target Sistemas";
$invertida = "";

//faz a execução com laço For puxando o número do array e capturando de trás pra frente
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $invertida .= $string[$i];
}

echo $invertida; // imprime a string invertida
