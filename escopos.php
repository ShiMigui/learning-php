<?php
    // local scope
    $var_b = "test";
    function fnName(){
        $var_a = 1;
        $var_b = "It is not a test";

        echo "$var_a - var b: $var_b<br>";
    }
    echo "var b: $var_b<br>";
    fnName();
    echo "var b: $var_b<br>";

    // $var_a, does not exists in this scope

    // global scope