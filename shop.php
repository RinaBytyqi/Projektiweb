<?php
//$hide="";
/*session_start();
if(isset($_SESSION['email'])){
  header("location:login.php");
  //$hide = "hide";
}else{
 //    $hide = "";
*/
?>

<!DOCTYPE html>
<html>
    <head>
   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/shopstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="css/projectstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Shop</title> 
    </head>
    <body>
    <?php
        include 'header.php';
        
        
            ?>
                <div class="flex-container">
                   <div class="flex-child-info">
                       <img class="pic-div" src="img/shopmain1.jpg">
                      
                   </div>
                   <div class="flex-child-info">
                    <h3 class="centered" id="firstRow">LOST IN THE HOLIDAY RUSH?</h3>
                    <h1 class="centered" id="secondRow">ShOP WITH US NOW!</h1>
                    <h3 class="centered" id="thirdRow">PICK WHATEVER YOU WANT<br>FOR YOU<br>OR YOUR LOVED ONES!</h3>
                   </div>
                   <div class="flex-child-info">
                    <img class="pic-div" id="image2" src="img/shopmain2.jpg">
                   </div>
               </div>
            
            
            </div>
            
                </div>



        <div class="shopPage">
      
        <div class="divproductsMain">
            <div class="textDiv">
            <h3 id="textShop"> SHOP SKIN </h3>
            </div>
            <div class = "divforProduct">
                <figure>
                <img class="picture" src="img/purpleeyecream.jpg">
                <br>
                <h3 class="description">EYE CREAM</h3>
                <h4 class="description2">Reduces Wrinkles + Brighten</h4>
                <h5 class="description2"> 15$</h5>
                <form>
                    <div class="buttonShop">
                <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                </div>
                </form>
                </figure>
            </div>
            <div class = "divforProduct">
                <figure>
                <img class="picture" src="img/hylaronicserum.jpg">
                <br>
                <h3 class="description">SERUM</h3>
                <h4 class="description2">Hydrate + Rejuvenate</h4>
                <h5 class="description2"> 12$</h5>
                <form>
                    <div class="buttonShop">
                <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                </div>
                </form>
                </figure>
        </div>
        <div class = "divforProduct">
            <figure>
            <img class="picture" src="img/pinkmask.jpg">
            <br>
            <h3 class="description">PINK CLAY</h3>
            <h4 class="description2">Detoxifying Mask</h4>
            <h5 class="description2"> 10$</h5>
            <form>
                <div class="buttonShop">
            <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
            </div>
         </form>
            </figure>
        </div>
        </div>

        <div class="divproducts">
            <div class = "divforProduct">
                <figure>
                <img class="picture" src="img/collagenmoisture.jpg">
                <br>
                <h3 class="description">MOISTURIZER</h3>
                <h4 class="description2">Nourish+ Reduces redness</h4>
                <h5 class="description2"> 25$</h5>
                <form>
                    <div class="buttonShop">
                <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                </div>
              </form>
                </figure>
            </div>
            <div class = "divforProduct">
                <figure>
                <img class="picture" src="img/purplecleanser.jpg">
                <br>
                <h3 class="description">CLEANSER</h3>
                <h4 class="description2">Cleanse + Pamper</h4>
                <h5 class="description2"> 15$</h5>
                <form>
                    <div class="buttonShop">
                <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                </div>
                </form>
                </figure>
        </div>
        <div class = "divforProduct">
            <figure>
            <img class="picture" src="img/bluesheetmask.jpg">
            <br>
            <h3 class="description">SHEET MASK</h3>
            <h4 class="description2">Cleanse + Relieve</h4>
            <h5 class="description2"> 5$</h5>
            <form>
                <div class="buttonShop">
            <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
            </div>
           </form>
            </figure>
        </div>
        </div>




        <div class="divproducts">
        <div class = "divforProduct">
            <figure>
            <img class="picture" src="img/bluecleanser.jpg">
            <br>
            <h3 class="description">CLEANSER</h3>
            <h4 class="description2">Cleanse + Replenish</h4>
            <h5 class="description2"> 13$</h5>
            <form>
                <div class="buttonShop">
            <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
            </div>
           </form>
            </figure>
        </div>
        <div class = "divforProduct">
            <figure>
            <img class="picture" src="img/hydroniccreme.jpg">
            <br>
            <h3 class="description">MOISTURIZER</h3>
            <h4 class="description2">Moisturize + Smooth</h4>
            <h5 class="description2"> 25$</h5>
            <form>
                <div class="buttonShop">
            <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
            </div>
            </form>
            </figure>
        </div>
        <div class = "divforProduct">
            <figure>
            <img class="picture" src="img/peeloffmask.jpg">
            <br>
            <h3 class="description">PEEL OFF MASK</h3>
            <h4 class="description2">Exfoliate + Renew</h4>
            <h5 class="description2"> 10$</h5>
            <form>
                <div class="buttonShop">
            <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
            </div>
            </form>
            </figure>
        </div>
        </div>




        <div class="divproducts">
        <div class = "divforProduct">
            <figure>
            <img class="picture" src="img/preventserum.jpg">
            <br>
            <h3 class="description">SERUM</h3>
            <h4 class="description2">Hydrate + Rejuvenate</h4>
            <h5 class="description2"> 30$</h5>
            <form>
                <div class="buttonShop">
            <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
            </div>
          </form>
            </figure>
        </div>
        <div class = "divforProduct">
            <figure>
            <img class="picture" src="img/claycleanser.jpg">
            <br>
            <h3 class="description">CLAY CLEANSER</h3>
            <h4 class="description2">Cleanse + Reboot</h4>
            <h5 class="description2"> 20$</h5>
            <form>
                <div class="buttonShop">
            <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
            </div>
             </form>
            </figure>
        </div>
        <div class = "divforProduct">
            <figure>
            <img class="picture" src="img/warmingGel.jpg">
            <br>
            <h3 class="description">MOISTURIZER</h3>
            <h4 class="description2">Hydrate + Clarify</h4>
            <h5 class="description2"> 32$</h5>
            <form>
                <div class="buttonShop">
            <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
            </div>
         </form>
            </figure>
        </div>
        </div>




        
        <div class="divproducts">
            <div class = "divforProduct">
                <figure>
                <img class="picture" src="img/yellowsheetmask.jpg">
                <br>
                <h3 class="description">SHEET MASK</h3>
                <h4 class="description2">Cleanse + Relieve</h4>
                <h5 class="description2"> 5$</h5>
                <form>
                    <div class="buttonShop">
                <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                </div>
                </form>
                </figure>
            </div>
            <div class = "divforProduct">
                <figure>
                <img class="picture" src="img/greymask.jpg">
                <br>
                <h3 class="description">MASK</h3>
                <h4 class="description2">Renew +  Clear</h4>
                <h5 class="description2"> 15$</h5>
                <form>
                    <div class="buttonShop">
                <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                </div>
               </form>
                </figure>
            </div>
            <div class = "divforProduct">
                <figure>
                <img class="picture" src="img/pineapplePeel.jpg">
                <br>
                <h3 class="description">PEEL MASK</h3>
                <h4 class="description2">Exfoliate + Firm</h4>
                <h5 class="description2"> 13$</h5>
                <form>
                    <div class="buttonShop">
                <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                </div>
                </form>
                </figure>
            </div>
            </div>


            <div class="divproducts">
                <div class = "divforProduct">
                    <figure>
                    <img class="picture" src="img/hyrdacreme.png">
                    <br>
                    <h3 class="description">MOISTURIZER</h3>
                    <h4 class="description2">Moisturize + Brighten</h4>
                    <h5 class="description2"> 25$</h5>
                    <form>
                        <div class="buttonShop">
                    <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                    </div>
                   </form>
                    </figure>
                </div>
                <div class = "divforProduct">
                    <figure>
                    <img class="picture" src="img/cleanservitaminC.jpg">
                    <br>
                    <h3 class="description">CLEANSER</h3>
                    <h4 class="description2">Brighten + Firm</h4>
                    <h5 class="description2"> 15$</h5>
                    <form>
                        <div class="buttonShop">
                    <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                    </div>
                    </form>
                    </figure>
                </div>
                <div class = "divforProduct">
                    <figure>
                    <img class="picture" src="img/antiage2.png">
                    <br>
                    <h3 class="description">MOISTURIZER</h3>
                    <h4 class="description2">Smooth + Moisturize</h4>
                    <h5 class="description2"> 25$</h5>
                    <form>
                        <div class="buttonShop">
                    <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                    </div>
                    </form>
                    </figure>
                </div>
             </div>


             <div class="divproducts">
                <div class = "divforProduct">
                    <figure>
                    <img class="picture" src="img/acidpeel.jpg">
                    <br>
                    <h3 class="description">ACID PEEL</h3>
                    <h4 class="description2">Reboot + Replenish</h4>
                    <h5 class="description2"> 28$</h5>
                    <form>
                        <div class="buttonShop">
                    <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                    </div>
                    </form>
                    </figure>
                </div>
                <div class = "divforProduct">
                    <figure>
                    <img class="picture" src="img/gentlecream.jpg">
                    <br>
                    <h3 class="description">MOISTURIZER</h3>
                    <h4 class="description2">Balance + Hydrate</h4>
                    <h5 class="description2"> 23$</h5>
                    <form>
                        <div class="buttonShop">
                    <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                    </div>
                    </form>
                    </figure>
                </div>
                <div class = "divforProduct">
                    <figure>
                    <img class="picture" src="img/blemish.jpg">
                    <br>
                    <h3 class="description">SERUM</h3>
                    <h4 class="description2">Clearing effect + Renew</h4>
                    <h5 class="description2"> 37$</h5>
                    <form>
                        <div class="buttonShop">
                    <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                    </div>
                    </form>
                    </figure>
                </div>
            </div>

        </div>
        <?php
include 'footer.php';
?>

        <script src="main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
// }
 ?>