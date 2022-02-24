<?php  
include_once 'controllers/ProduktController.php'; 

if(isset($_GET['id'])){ 
 $myID = $_GET['id'];
 
 }
  $prod = new ProduktController(); 
  $currentID = $prod->edit($myID); 

  if (isset($_POST['edit'])){
    $prod->setEmri($_POST['emri']);
    $prod->setPershkrimi($_POST['pershkrimi']);
    $prod->setFoto($_POST['foto']);
    $prod->setQmimi($_POST['qmimi']);
     $prod->update($_POST,$myID);
   
     echo
    "<script>
    alert('dhenat jane PERDITSUAR me sukses');
    document.location='Dashboard.php'
    </script>";
    
    }
    
 ?>

<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/shopstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="css/projectstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Edit</title>
    </head>
    <body>
    <?php
include_once 'header.php';
?>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                <label>Emri</label>
                <input type="text" class="inp" name="emri"
                    value="<?php echo $currentID['emri']; ?>">
                <label>Pershkrimi</label>
                <input type="text" class="inp" name="pershkrimi"
                    value ="<?php echo $currentID['pershkrimi'];?> ">
                <label>Foto</label>
                <input type="file" class="inp" name="foto"
                    value ="<?php echo $currentID['foto'];?> ">
                <label>Qmimi</label>
                <input type="text" class="inp" name="qmimi"
                     value ="<?php echo $currentID['qmimi'];?> ">
                <button name='edit'>EDIT</button>
            </form>
        </div>
        <?php
include_once 'footer.php';
?>
    </body>
</html>