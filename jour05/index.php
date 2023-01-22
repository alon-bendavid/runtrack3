<!DOCTYPE html>
<?php
require_once('User-pdo.php');
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdVerify = $_POST['pwdVerify'];
    $user = new User($nom, $lastName, $email, $pwd);
    $user->register();
}


?>
<html>

<head>
    <title>Sign Up</title>
</head>

<body>
    <form id="signup-form" method="post">
        <input type="text" id="nom" name="nom" placeholder="nom" required autofocus>
        <input type="text" id="lastName" name="lastName" placeholder="Last nom" required autofocus>

        <input type="email" id="email" name="email" placeholder="Email" required>

        <input type="password" id="pwd" name="pwd" placeholder="Password" required>
        <input type="password" id="pwdVerify" name="pwdVerify" placeholder="verify Password" required>

        <input type="submit" value="Sign Up" name="submit">
    </form>
</body>

</html>