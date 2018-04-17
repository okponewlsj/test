<?php
class Database{
    private $host = "localhost";
    private $db_name = "api_db";
    private $user_name = "root";
    private $password = "0322";
    public $conn;

    public function getConnection(){

        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=".$this->host. ";dbname=".$this->db_name, $this->user_name,$this->password);
            $this->conn->exec("set names utf8");
        }catch (PDOException $ex){
            echo "Connection Error :". $ex;
        }
        return $this->conn;
    }
}
?>
