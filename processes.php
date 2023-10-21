<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once('DatabaseInterface.php');

class DbCon implements DatabaseInterface
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;
    private $pdo;

    public function __construct(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "user.data";
        $this->charset = "utf8mb4";
    }

    public function connect(){
        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function disconnect() {
        $this->pdo = null;
    }

    public function insertUserData($full_name, $username, $email, $address) {
        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare("INSERT INTO users (full_name, username, email, address) VALUES (:full_name, :username, :email, :address)");
            $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':address', $address, PDO::PARAM_STR);

            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error inserting data " . $e->getMessage();
        }
    }
}
$database = new DbCon();
$pdo = $database->connect();
?>

    
     

       






