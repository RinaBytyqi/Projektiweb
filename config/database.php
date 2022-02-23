<?php

class Database{
   public $pdo;

   public function _construct(){
       try{
          session_start();
          $link=new PDO('mysqli:host=localhost;dbname=web.db','root','');
          $this->pdo=$link;
         }catch(PDOException $e){
          die($e->getMessage());
}

/*
if(isset($_POST['submit'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $roli=$_POST['roli'];
   $query="select * from users where email='$email' and password='$password' and roli='$roli'";
   $result=mysql_query($pdo,$query);
   $count=mysql_num_rows($result);
   if(count>0){
      header('Location:../Projektiweb/shop.php');

   }else{
      header('Location:../Projektiweb/login.php');
   }
}*/
   }
}

?>