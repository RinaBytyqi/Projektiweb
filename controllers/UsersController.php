<?php
require_once '../config/Database.php';

class UserController{
  public $db;

  public function _construct(){
      $this->db=new Database();
  }



  public function readData(){
      $query=$this->db->pdo->query('Select * from users');

      $query->fetchAll();
  }

  public function insert($request){
    $query=$this->db->pdo->prepare('insert into produktet(email,password,roli)
     values(:email,:password,:roli)');
     $query->bindParam(':email',$request[['email']]);
     $query->bindParam(':password',$request[['password']]);
     $query->bindParam(':roli',$request[['roli']]);

     $query->execute();

     return header('Location: projekti.php');

  }

   public function edit($id){
  $query=$this->db->pdo->prepare('select * from users where id=:id')
$query->bindParam(':id',$id);
$query->execute();

return $query->fetch();

}
public function update($request,$id){
   $query=$this->db->pdo->prepare('update users set email=:email,password=:password,
   roli=:roli where id=:id');

   $query->bindParam(':email',$request['email']);
   $query->bindParam(':password',$request[['password']]);
   $query->bindParam(':roli',$request[['roli']]);
   $query->bindParam(':id',$id);
   $query->execute();

return header('Location: projekti.php');


}

public function  delete($id){
  $query=$this->db->pdo->prepare('delete from users where id=:id');
  $query->execute();

  return header('location: projekti.php');

}


}

?>