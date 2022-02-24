<?php
include_once 'controllers/ProduktController.php';
$tdhena=new ProduktController();


if(isset($require['id'])){
    $tdhena->setID($require['id']);
    $ID=$tdhena-getID();
    $tdhena->delete($ID);
}
?>