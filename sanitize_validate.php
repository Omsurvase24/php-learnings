<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sanitize_validate.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    echo "Hello " . $username . "<br>";

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    echo "Your age is: " . $age . "<br>";

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "Your email is: " . $email;
}
