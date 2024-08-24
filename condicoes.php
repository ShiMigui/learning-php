<?php

$pessoa = [
    "name" => "Miguel Nascimento",
    "favorite_game" => "Fallout 1",
    "idade" => 18
];

if($pessoa['idade'] >= 18){
    echo $pessoa['name'], " é maior de idade!";
}
