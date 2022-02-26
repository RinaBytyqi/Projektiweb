<?php
include_once 'config/database.php';

$db=new Database();

if(isset($_POST['search'])){

$str=$_POST['search'];

$sql = "SELECT  emri, pershkrimi, foto, qmimi  FROM produktet ";
$result = $db->pdo->query($sql);
$rows = $result->fetchAll();
?>
<style>
    .shopPage{
        height: 650px;
    }
    </style>
<div class="shopPage">
    
<div class="divproductsMain" >
    <div class="textDiv">
    <h3 id="textShop" > SHOP SKIN </h3>
    </div>

    <?php
foreach($rows as $row){
?>
<div style="margin-right:100px;margin-top:30px;height:380px " class = "divforProduct divproducts">
<figure>
<img class="picture" src="<?php echo $row['foto']?>">
<br>
<h3 class="description"><?php echo $row['emri']?></h3>
<h4 class="description2"><?php echo $row['pershkrimi']?></h4>
<h5 class="description2"> <?php echo $row['qmimi']?></h5>
<form id="buttonForm">
    <div class="buttonShop">
<button type="submit" id="buttonstyleShop"> ADD TO CART</button>
</div>

</form>
</figure>
</div>

<?php
}

}







?>
</div>
</div>