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

        // try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // check if email already exists in the database
        $stmt = $conn->prepare("SELECT email FROM utilisateurs WHERE email = :email");
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            throw new Exception("This email is already registered");
        }
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
        // } 
        // catch (PDOException $e) {
        //     echo $e->getMessage();
        // } catch (Exception $e) {
        //     echo $e->getMessage();
        // }

        $conn = null;
    }
    public function login($email, $password)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "utilisateurs";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$user) {
                throw new Exception("Email or password is incorrect");
            }
            if (!password_verify($password, $user['password'])) {
                throw new Exception("Email or password is incorrect");
            }
            // start session
            session_start();
            $_SESSION['user'] = $user;
            echo "User logged in successfully";
        } catch (PDOException $e) {
            echo $e->getMessage();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $conn = null;
    }
}



// $user = new User('qsdqsd', 'qsdqsd', 'qsdqsd', 'qsdqsd');
// $user->register();
