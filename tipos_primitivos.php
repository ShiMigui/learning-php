<?php

$value = "Testing \$value";
echo "value: $value";

echo "<br>Is int: ";
if (is_int($value)) {
    echo "True";
} else {
    echo "False";
}

echo "<br>Is float: ";
if (is_float($value)) {
    echo "True";
} else {
    echo "False";
}

echo "<br>Is string: ";
if (is_string($value)) {
    echo "True";
} else {
    echo "False";
}
