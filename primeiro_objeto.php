<?php

class Pessoa {
    function talk() {
        echo "Hello!";
    }
}

$pessoa = new Pessoa();
$pessoa->name = "Miguel Nascimento";

$pessoa->talk();