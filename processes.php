<?

class DbCon extends DatabaseInterface
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;
   
    public function __connect(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="user_data";
        $this->charset="utf8mb4";

    }
    protected function connect(){
        try{
        $dsn="mysqli:host=".$this->servername.";dbname=" .$this->dbname. ";charset=".$this->charset;
        $pdo =new PDO($dsn, $this->username  ,$this->password);
        return $pdo;
        }
            catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());

        }
    
    }

   
    }
     

       






