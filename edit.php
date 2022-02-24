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
                <label>Mbiemri</label>
                <input type="text" class="inp" name="mbiemri"
                    value ="<?php echo $records['mbiemri'];?> "/>
                <label>Departementi</label>
                <input type="text" class="inp" name="departamenti"
                    value ="<?php echo $records['departamenti'];?> "/>
                <label>Adresa</label>
                <input type="text" class="inp" name="adresa"
                     value ="<?php echo $records['adresa'];?> "/>
                <button name='edit'>RUAJ</button>
            </form>
        </div>
    </body>
</html>