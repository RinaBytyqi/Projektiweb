<?php
include_once 'controllers/ProduktController.php';
if(isset($_POST['save'])){
     
    $insertimi=new ProduktController();
    $insertimi->setEmri($_POST['emri']);
    $insertimi->setPershkrimi($_POST['pershkrimi']);
    $insertimi->setFoto($_POST['foto']);
    $insertimi->setQmimi($_POST['qmimi']);

    $insertimi->insert($_POST);
    echo "<script> alert'Te dhenat u ruajten me sukses';
    document.location='Dashboard.php'
    </script>";
}

?>
<!DOCTYPE html>
<htm>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/shopstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="css/projectstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
    <?php
include_once 'header.php';
?>
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
        <?php
include_once 'footer.php';
?>
    </body>
</html>