<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="hamburger" value="HamBurger">
        HamBurger <br>
        <input type="checkbox" name="taco" value="Taco">
        Taco <br>
        <input type="checkbox" name="hotdog" value="HotDog">
        HotDog <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    if (isset($_POST['pizza'])) {
        echo "You like pizza <br>";
    }
    if (isset($_POST['hamburger'])) {
        echo "You like hamburger <br>";
    }
    if (isset($_POST['taco'])) {
        echo "You like taco <br>";
    }
    if (isset($_POST['hotdog'])) {
        echo "You like hotdog <br>";
    }
}
