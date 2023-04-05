<?php

class Database
{
    private $server_name="localhost";
    private $user_name="root";
    private $password=" ";
    private $dbname="trial3";

    private $conn=false;
    private $mysqli="";

    public function __construct()
    {
        if(!$this->conn)
        {
            $this->mysqli=new mysqli($this->server_name,$this->$user_name,$this->password,$this->dbname);
            if($this->mysqli)
            {
                echo "connection stablished";
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    public function insert()
    {

    }
    public function delete()
    {

    }
    public function update()
    {

    }
    public function show()
    {
        
    }
    public function __destruct()
    {

    }
}

?>