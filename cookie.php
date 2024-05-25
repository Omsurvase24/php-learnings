<?php

setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); //To set cookie with a 2 day life span
setcookie("fav_drink", "lassi", time() - 0, "/"); //To delete cookie

foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
}
