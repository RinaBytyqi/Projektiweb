<?php

class Database{
    public $conn;
    public $servername = "localhost";
    public $username = "rina";
    public $password = "rina123";
    public $dbname = "web.db";

    public function _construct(){
       try{
        $conn = new mysqli($servername, $username, $password, $dbname);
       }catch(Exception $e){
        die($e->getMessage());
       }
    }


}
?>