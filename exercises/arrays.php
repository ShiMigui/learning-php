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
$car = ["plate"=> "RIO2A18", "model"=> "NUPG 2024", "cor"=> "black"];
echo "A plate é ", $car['plate'], " ele é um model ", $car['model'], " ", $car['cor'];