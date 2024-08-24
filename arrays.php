<?php

$a = [1, 2, 3];
print_r($a);
echo "<br><br>";

$person = [
    'name' => 'Miguel Nascimento dos Santos',
    'birthdate' => '06/09/2005'
];
print_r($person);
echo "<br>";
echo $person['name'];

echo "<br><br>";
$carro = ["placa"=> "RIO2A18", "modelo"=> "NUPG 2024", "cor"=> "preto"];
echo "A placa é ", $carro['placa'], " ele é um modelo ", $carro['modelo'], " ", $carro['cor'];