<?php
    // numbers sum
    $number_a = 3;
    $number_b = 3;

    $number_c = $number_a + $number_b;

    echo "Valor de number C: $number_c<br>";

    // $$ variables

    $var_a = "sample";
    echo "$var_a<br>";

    $$var_a = "Miguel Nascimento"; // $ + $var_a value = $sample
    echo "$sample<br>";

    // Variable wit reference
    $var_b =& $var_a;
    echo "<br>$var_b<br>";
    $var_a = "other_sample";
    echo "$var_b<br>";
