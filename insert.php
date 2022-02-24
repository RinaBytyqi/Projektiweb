<?php
include_once 'controllers/ProduktController.php';
if(isset($_POST['save'])){
     
    $insertimi=new ProduktController();
    $insertimi->setEmri($_POST['emri']);
    $insertimi->setPershkrimi($_POST['pershkrimi']);
    $insertimi->setFoto($_POST['foto']);
    $insertimi->setQmimi($_POST['qmimi']);

    $insertimi->insert($_POST);
}

?>
<!DOCTYPE html>
<htm>
    <head>
        <link rel="stylesheet" href ="css/mysingUPstyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                <label>Emri</label>
                <input type="text" class="inp" name="emri" placeholder="shto emrin..."/>
                <label>Pershkrimi</label>
                <input type="text" class="inp" name="pershkrimi" placeholder="shto pershkrimin..."/>
                <label>Foto</label>
                <input type="file" class="inp" name="foto" placeholder="shto foton..."/>
                <label>Qmimi</label>
                <input type="text" class="inp" name="qmimi" placeholder="shto qmimin"/>
                <button name='save'>RUAJ</button>
            </form>
        </div>
    </body>
</htm>