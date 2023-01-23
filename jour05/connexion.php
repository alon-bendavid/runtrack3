<!DOCTYPE html>
<?php
// require_once('User-pdo.php');

if (isset($_POST['connectSub'])) {

    $checkEmail = $_POST['checkEmail'];
    $checkPwd = $_POST['checkPwd'];
    $user = new User('', '', '', '');
    $user->login($checkEmail, $checkPwd);
}


?>
<html>

<head>
    <title>Sign Up</title>
</head>

<body>
    <form id="signup-form" method="post">

        <input type="checkEmail" id="checkEmail" name="checkEmail" placeholder="checkEmail" required>

        <input type="password" id="checkPwd" name="checkPwd" placeholder="Password" required>

        <input type="submit" value="Sign Up" name="connectSub">
    </form>
</body>

</html>