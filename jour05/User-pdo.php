<?php

class User
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;

    public function __construct($nom, $prenom, $email, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function register()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "utilisateurs";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO utilisateurs (nom, prenom, email, password)
            VALUES (:nom, :prenom, :email, :password)";
            // Prepare statement
            $stmt = $conn->prepare($sql);
            // bind the parameters
            $stmt->bindParam(':nom', $this->nom);
            $stmt->bindParam(':prenom', $this->prenom);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);
            // execute the query
            $stmt->execute();
            echo "New user created successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }
}
// $user = new User('qsdqsd', 'qsdqsd', 'qsdqsd', 'qsdqsd');
// $user->register();
