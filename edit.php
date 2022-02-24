<?php

require_once 'controllers/ProduktController.php';
$prod= new ProduktController();
$myId=$_GET['id'];
$record=$prod->readData($myId);

 if (isset($_POST['edit'])){
     if ($myId==$dhenat->getID()){

          $dhenat->setEmri($_POST['emri']);
          $dhenat->setPershkrimi($_POST['pershkrimi']);
          $dhenat->setFoto($_POST['foto']);
          $dhenat->setQmimi($_POST['qmimi']);

         echo $dhenat->update();
    echo 
    "<script>
        alert('dhenat jane PERDITSUAR me sukses');
        document.location='displayDhenat.php'
    </script>";
     }
 }
  
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href ="css/mysingUPstyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                <label>Emri</label>
                <input type="text" class="inp" name="emri"
                    value ="<?php echo $records['emri'];?> "/>
                <label>Pershkrimi</label>
                <input type="text" class="inp" name="pershkrimi"
                    value ="<?php echo $records['pershkrimi'];?> "/>
                <label>Foto</label>
                <input type="text" class="inp" name="foto"
                    value ="<?php echo $records['foto'];?> "/>
                <label>Qmimi</label>
                <input type="text" class="inp" name="qmimi"
                     value ="<?php echo $records['qmimi'];?> "/>
                <button name='edit'>RUAJ</button>
            </form>
        </div>
    </body>
</html>