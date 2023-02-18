<?php

if (is_int(5)){
    echo "É um número inteiro <br>";
}

$a= 10;

if (is_int($a)){
    echo "é um inteiro<br>";

}

if (is_int("Não funciona")){
    echo "Não é um inteiro";
}

// Floats

$ab = 1.12;

echo $ab;