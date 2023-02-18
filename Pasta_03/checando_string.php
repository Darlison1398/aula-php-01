<?php
  
  $str = "Darlison";
  $num = 12;

  if (is_string($str)){
    echo "É uma string<br>";
  }else {
    echo "Não é uma String<br>";
  }

  if (is_string($num)){
    echo "é uma string!<br>";
  }else{
    echo "Não é uma string.<br>";
  }

  if (is_string("Vou vencer, em nome de Jesus")){
    echo "É uma string verdadeira!";
  }