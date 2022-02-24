
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/shopstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="css/projectstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Dashboard </title> 
</head>
<body>
<?php
include_once 'header.php';
?>
<link rel="stylesheet" href ="css/displayStyle.css" />
        <title>Shfaq dhenat</title>
    </head>
    <body>
        <div id="a1">
            <header>
                <h3>Ju lutem shtype per te regjistruar te dhenat ne Sistem</h3>
                <a href="insert.php"><Button id='r'>Regjistrohu</Button></a>
            </header>
            <table>
            <hr>
            <p>Lista e te dhenave:</p>
                    <tr>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Departamenti</th>
                        <th>Adresa</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                      
                        <td><?php echo $value['emri']?></td>
                        <td><?php echo $value['pershkrimi']?></td>
                        <td><?php echo $value['foto']?></td>
                        <td><?php echo $value['qmimi']?></td>
                        <td id='de'><a href=""><button id="d">DELETE</button></a>
                           <a  href=""><button id='e'>EDIT</button></td></a>
                    </tr>
                  
            </table>
        </div>
<?php
include_once 'footer.php';
?>
</body>
</html>