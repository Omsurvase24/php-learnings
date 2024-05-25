<?php

function happy_birthday($name)
{
    echo "Happy Birthday to you! <br>";
    echo "Happy Birthday to you! <br>";
    echo "Happy Birthday to you dear {$name}! <br>";
    echo "Happy Birthday to you! <br> <br>";
}

// happy_birthday("Om");
// happy_birthday("Kartik");

function is_even($num)
{
    $result = $num % 2;
    return $result;
}

// echo is_even(21);

function hypo($a, $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}

echo hypo(3, 4);
