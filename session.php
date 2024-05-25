<?php

// Session = SGB used to store info on a user to be across multiple pages.
// A user is assigned a session-id ex. login credentials.

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is session page <br>
    <a href="radio.php">This goes to radio page</a> <br>
</body>

</html>

<?php

$_SESSION['username'] = "Om";
$_SESSION['password'] = "ti-21038";

echo $_SESSION['username'] . "<br>";
echo $_SESSION['password'] . "<br>";
