<?

class DbCon extends DatabaseInterface
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;
    private $pdo;
   
    public function __connect(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="user_data";
        $this->charset="utf8mb4";

    }
    public function connect(){
        try{
        $dsn="mysqli:host=".$this->servername.";dbname=" .$this->dbname. ";charset=".$this->charset;
        $this->pdo =new PDO($dsn, $this->username  ,$this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->pdo;

        }
            catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());

        }
    
    }

public function disconnect()
    {
        // Simply set the PDO instance to null to close the connection
        $this->pdo = null;
    }
}
   
    
     

       






