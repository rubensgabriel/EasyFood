<!--conexao.php-->
<?php
class Dbconexao 
{    
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'easyfood';
     
    protected $connection;
     
    public function __construct(){
 
        if (!isset($this->connection)) {
             
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
             
            if (!$this->connection) {
                echo 'Não é possível se conectar ao servidor de banco de dados!!!';
                exit;
            }            
        }    
         
        return $this->connection;
    }
}
?>