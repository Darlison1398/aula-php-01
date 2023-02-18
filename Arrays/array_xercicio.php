<?php
 
 $pessoa = ['nome'=> 'Darlison', 'Idade'=> 24, 'profissão'=> 'Desenvolvedor FullStack'];

 print_r($pessoa);
 echo '<br>';
 echo $pessoa["Idade"];
 echo "<br>";

 if ($pessoa['Idade'] >= 18) {
    echo "Maior de idade!<br>";
 }else{
    echo "Menor de idade!<br>";
 };