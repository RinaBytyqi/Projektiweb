
<?php
include 'config/database.php';

class Validimi{
   // public $email = $_POST['email'];
   // public $password = $_POST['password'];
    public $db;
    public $rows;

    public function __construct(){
        $this->db=new Database();
    }
  
    public function validimi(){

    if(isset($_POST['butoniLogIn'])){
          if(empty($_POST['email']) || empty($_POST['password'])){
               echo "Fill all fields!";
    }else{
        $sql = "SELECT  email, password, roli  FROM users";
        $result = $this->db->pdo->query($sql);
        
        while ($row = $result->fetchAll()){
            $rows[] = $row;
        }
        if(isset($rows)){
        foreach ($rows as $row){
            if($email==$row['email']){
                   session_start();
                   $_SESSION['email'] = $row["email"];
                   $_SESSION['password'] = $row['password'];
                   $_SESSION['roli'] = $row['Roli'];

                   header("location:projekti.php");
           
        }else{
            echo '<script> alert("Incorrect Username or Password!")</script>';
        }
      }
    }
  }
}

}}
?>