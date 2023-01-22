<?php
//connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateurs";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    // get the data from the request
    $data = json_decode(file_get_contents("php://input"), true);
    // set the values for the parameters
    $nom = $data['name'];
    $prenom = $data['last-name'];
    $email = $data['email'];
    $password = $data['pwd'];
    // execute the statement
    $stmt->execute();
    // return success message
    echo json_encode(array("status" => "success"));
} catch (PDOException $e) {
    // return error message
    echo json_encode(array("status" => "error", "message" => $e->getMessage()));
}
$conn = null;
