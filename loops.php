<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="loops.php" method="post">
        <label>Enter a number to count to:</label>
        <input type="text" name="c">
        <input type="submit" value="start">
    </form>
</body>

</html>

<?php
$c = $_POST["c"];

for ($i = $c; $i > 0; $i--) {
    echo "$i <br>";
}

while ($c < 10) {
    $c++;
    echo "$c <br>";
}

?>