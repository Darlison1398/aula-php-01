<?php
 
 class Pessoa {
    function falar(){
        echo 'Olá, objeto. Isso aqui é uma função';
    }
 };

 $Darlison = new Pessoa();

 $Darlison ->nome = 'Darlison Silva';
 echo $Darlison ->nome;

 echo '<br>';

 $Darlison ->falar();