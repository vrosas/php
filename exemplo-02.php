<?php

//Comentário

$nome1 =  "Joao";

$sobrenome = 'Rangel';

$nomeCompleto = $nome1 ." ". $sobrenome;

echo $nome1;

echo "<br>";

echo $nomeCompleto;

unset ($nome1);

if (isset($nome1)) {

echo $nome1;

}


?>