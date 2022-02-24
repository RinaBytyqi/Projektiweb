<?php
include_once 'controllers/ProduktController.php';
$tdhena=new ProduktController();


if(isset($_GET['id'])){
    $tdhena->setID($_GET['id']);
    $ID=$tdhena->getID();
    $tdhena->delete($ID);
}
?>