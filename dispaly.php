<?php

require_once 'controllers/ProduktController.php';
$prod= new ProduktController();
$myId=$_GET['id'];
$record=$prod->readData();

 if (isset($_POST['edit'])){
     if ($myId==$dhenat->getId()){

          $dhenat->setEmri($_POST['emri']);
          $dhenat->setMbiemri($_POST['pershkrimi']);
          $dhenat->setDept($_POST['foto']);
          $dhenat->setAdresa($_POST['qmimi']);

         echo $dhenat->updateDhenat();
    echo 
    "<script>
        alert('dhenat jane PERDITSUAR me sukses');
        document.location='displayDhenat.php'
    </script>";
     }
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
        <h3>Perditso te dhenat ne Formular</h3>
            <form action='' method="POST">
                <label>Emri</label>
                <input type="text" class="inp" name="emri"
                    value ="<?php echo $record['emri'];?> "/>
                <label>Pershkrimi</label>
                <input type="text" class="inp" name="pershkrimi"
                    value ="<?php echo $record['pershkrimi'];?> "/>
                <label>Foto</label>
                <input type="text" class="inp" name="foto"
                    value ="<?php echo $record['foto'];?> "/>
                <label>Qmimi</label>
                <input type="text" class="inp" name="qmimi"
                     value ="<?php echo $record['qmimi'];?> "/>
                <button name='edit'>RUAJ</button>
            </form>
        </div>
    </body>
</htm>