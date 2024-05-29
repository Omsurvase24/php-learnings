<?php

// hashing = transforming sensitive data (password)
//           into letters, numbers, and/or symbols
//           via a mathematical process. (similar to encryption)
//           hides the original data from 3rd parties.

$password = "lmao";

$hash = password_hash($password, PASSWORD_DEFAULT); //PASSWORD_DEFAULT uses bcrypt algo

if (password_verify("lmao", $hash)) {
    echo "You are logged in!";
} else {
    echo "Incorrect password!";
}
