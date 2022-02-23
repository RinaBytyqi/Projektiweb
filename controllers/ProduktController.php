<?php
require_once '../config/Database.php';

class ProduktController{
  public $db;

  public function _construct(){
      $this->db=new DataBase;
  }

  //crud

  public function readData(){
      $query=$this->db->pdo->query('Select * from produktet');

      $query->fetchAll();
  }

  public function insert($request){
    $query=$this->db->pdo->prepare('insert into produktet(emri,pershkrimi,qmimi)
     values(:emri,:pershkrimi,:qmimi)');
     $query->bindParam(':emri',$request[['//name te forma']]);
     $query->bindParam(':pershkrimi',$request[['//name te forma']]);
     $query->bindParam(':qmimi',$request[['//name te forma']]);

     $query->execute();

     return header('Location: projekti.php');

  }

   public function edit($id){
  $query=$this->db->pdo->prepare('select * from produktet where id=:id')
$query->bindParam(':id',$id);
$query->execute();

return $query->fetch();

}
public function update($request,$id){
   $query=$this->db->pdo->prepare('update produktet set emri=:emri,pershkrimi=:pershkrimi,
   qmimi=:qmimi where id=:id');

   $query->bindParam(':emri',$request['emri']);
   $query->bindParam(':pershkrimi',$request[['//name te forma']]);
   $query->bindParam(':qmimi',$request[['//name te forma']]);
   $query->bindParam(':id',$id);
   $query->execute();

return header('Location: projekti.php');


}

public function  delete($id){
  $query=$this->db->pdo->prepare('delete fro produktet where id=:id');
  $query->execute();

  return header('location: projekti.php');

}


}

?>