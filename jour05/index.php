<!DOCTYPE html>
<?php

require_once('User-pdo.php');

// Retrieve data from request body
$data = json_decode(file_get_contents('php://input'), true);

// Validate data
if (empty($data['nom']) || empty($data['lastName']) || empty($data['email']) || empty($data['pwd']) || empty($data['pwdVerify'])) {
    http_response_code(400);
    echo 'Missing required fields';
    exit();
}

if ($data['pwd'] !== $data['pwdVerify']) {
    http_response_code(400);
    echo 'Passwords do not match';
    exit();
}

// Create new User object and call register method
$user = new User($data['nom'], $data['lastName'], $data['email'], $data['pwd']);
$user->register();

// Return success message
http_response_code(200);
echo 'User created successfully';

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script async src="./script.js"></script>
</head>

<body>
    <div class="form_box">
        <form id="signup-form" method="post" class="form">
            <input class="name success" type="text" id="nom" name="nom" placeholder="nom" required autofocus>
            <small>error message!</small>
            <input class="lastname " type="text" id="lastName" name="lastName" placeholder="Last nom" required autofocus>
            <small class="error" name="error">error message!</small>

            <input type="email" id="email" name="email" placeholder="Email" required>
            <small>error message!</small>

            <input type="password" id="pwd" name="pwd" placeholder="Password" required>
            <small>error message!</small>

            <input type="password" id="pwdVerify" name="pwdVerify" placeholder="verify Password" required>
            <small>error message!</small>

            <input type="submit" value="Sign Up" name="submit" class="button">
        </form>
    </div>
</body>

</html>