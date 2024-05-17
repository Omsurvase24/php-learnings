<?php
$foods = array("apple", "banana", "pineapple", "mango");
echo $foods[0] . "<br>";

// $foods[0] = "guava";
// array_push($foods, "coconut", "kiwi");
// array_pop($foods);
// array_shift($foods);
// $foods = array_reverse($foods);
// echo count($foods);

foreach ($foods as $food) {
    echo $food . "<br>";
}

$capitals = array("USA" => "Washington D.C.", "India" => "New Delhi", "Japan" => "Kyoto", "South Korea" => "Seoul");

$capitals["USA"] = "Las Vegas";
$capitals["China"] = "Beijing";
$keys = array_keys($capitals);

foreach ($keys as $key) {
    echo "{$key} <br>";
}

foreach ($capitals as $key => $value) {
    echo "{$key} = {$value} <br>";
}
