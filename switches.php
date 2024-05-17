<?php
$grade = "A";

switch ($grade) {
    case "A":
        echo "Great";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Okay";
        break;
    case "D":
        echo "Poorly";
        break;
    case "F":
        echo "Failed";
        break;
    default:
        echo "Not a Valid Grade";
        break;
}
