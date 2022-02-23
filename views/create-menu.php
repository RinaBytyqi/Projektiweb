<?php 
    require_once '../controllers/ProduktController.php';
    $produkti = new ProduktController;
    if(isset($_POST['submit'])){
        $produkti -> insert ($_POST);
    }
?>

<div>
    <form method="POST">
            Title:
            <input type="text" name="emri">
            <br>
            <input type="text" name="pershkrimi">
            <br>
            Image:
            <input type="file" name="foto">
            <br>
            <input type="text" name="qmimi">
            <br>
            <!--Content:
            <textarea name ="body" cols="30" rows="10"></textarea>-->
            <input type="submit" name="submit" value="Save">
        </from>
        <p>Create menu test </p>
</div>