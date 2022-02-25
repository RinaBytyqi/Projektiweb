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
<html>
    <head>
        
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href ="css/insertStyle.css"/>
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <?php
        include_once 'header.php';
        ?>
        <center>
            <h3 style="color:white; margin-top:1%"> ADD PRODUCT </h3>
        <div id="formulari">
            <form action='' method="POST" id="insertForm">
                <label id="product">Product title</label>
                <input type="text" id="inp" name="emri" placeholder="Type here"/>
                <label>Description</label>
                 <textarea name="pershkrimi" rows="6" placeholder="Type here"></textarea>
                
                <label>Image</label>
                <div class="fotoDiv">
                <input type="file" id="fotoInput" name="foto" multiple/>
                <p id="fotoParagh">
                <i class="fa fa-picture-o fa-5x" aria-hidden="true" style="font-size:40pt"></i>
                </p>
                </div>
                <label id="pricelabel">Price</label>
                <div class="priceDiv">
                <input id="price" type="number" id="inp" name="qmimi" placeholder="Type here"/>
                <input id="euro" type="number" id="inp"  placeholder="EUR" disabled="disabled" />
                </div>
                <button id="buttonInsert"name='save'>Submit item</button>
            </form>
        </div>
</center>
        <?php
        include_once "footer.php";
        ?>
    </body>
</html>
