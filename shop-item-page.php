<?php
  require 'components/head.inc.php';
?>

<?php
  include 'components/nav.inc.php';
?>

<?php
  include 'connectdb.php';
?>

<div class="container product-container">
    <!--Product Information-->
    <div class="row row-sm">

        <!--Product Images-->
        <div class="col-md-6 product-image-container">
          <?php

            if($_GET["sideImages"] == NULL)
            {
              $sImages = array("https://s.fotorama.io/1.jpg", "https://s.fotorama.io/2.jpg", "https://s.fotorama.io/3.jpg", "https://ucarecdn.com/382a5139-6712-4418-b25e-cc8ba69ab07f/-/stretch/off/-/resize/760x/");
            }
            else
            {
              $sImages = json_decode($_GET["sideImages"]);
            }

            echo <<<HTML
              <!--Side Images-->
              <div class="side-picture-container">
                <ul class="picture-list">
                  <li><img src="{$sImages[0]}" id="{$sImages[0]}" onclick="changeShopImage(this.id)" style="cursor: pointer;"></li>
                  <li><img src="{$sImages[1]}" id="{$sImages[1]}" onclick="changeShopImage(this.id)" style="cursor: pointer;"></li>
                  <li><img src="$sImages[2]" id="$sImages[2]" onclick="changeShopImage(this.id)" style="cursor: pointer;"></li>
                  <li><img src="{$sImages[3]}" id="{$sImages[3]}" onclick="changeShopImage(this.id)" style="cursor: pointer;"></li>
                </ul>
              </div>
              <!--Current Product Image-->
              <div class="big-product-image">
                <img class="current-product-image" src="{$sImages[0]}" id="current-product-image">
              </div>
            HTML;
          ?>
          
        </div>
        
        <!--Product Text-->
        <div class="col-md-6">
          <?php
            $name = isset($_GET['productName']) ? $_GET['productName'] : "defaultName";
            $caffineLevel = isset($_GET['caffineLevel']) ? $_GET['caffineLevel'] : 0;
            $type = isset($_GET['tType']) ? $_GET['tType'] : "default";

            if($_GET['tIngredients'] == NULL)
            {
              $ingredients = "none";
            }
            else
            {
              $ingredients = $_GET["tIngredients"];
            }

            if($_GET['tTaste'] == NULL)
            {
              $taste = "no taste";
            }
            else
            {
              $taste = $_GET['tTaste'];
            }

            if($_GET['bestMake'] == NULL)
            {
              $make = "default make";
            }
            else
            {
              $make = $_GET['bestMake'];
            }

            if($_GET["tSize"] == NULL)
            {
              $size = array(12, 50, 110);
            }
            else
            {
              $sarr = $_GET["tSize"];
              $size = json_decode($sarr);
            }

            if($_GET["tPrice"] == NULL)
            {
              $price = array(9.99, 19.99, 40.99);
            }
            else
            {
              $parr = $_GET["tPrice"];
              $price = json_decode($parr);
            }
          ?>
          
          <!--Get the arrays into js variables so we can change the display with them-->
          <script type="text/javascript">
            var priceArrayJS = <?php echo $parr ?>;
            var sizeArrayJS = <?php echo $sarr ?>;
            
          </script>

          <h1 id="product-name"><?php echo $name;?></h1>

          <div class="container-fluid product-price-section" style="display: flex;">

            <div class="pricing product-price-container" style="margin-left: 1vw; margin-top: 1vw;">
              <h3 id="productPrice">$<?php echo $price[0];?> CAD</h3>
            </div>  
            <div class="dropdown pricing" id="size-selection" style="margin-left: 5vw; margin-top: 1vw;">
              <button class="btn rounded-pill dropdown-toggle" type="button" id="product-size-dropdown-button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #EBE9E7;">
                <?php echo $size[0]; echo "g";  ?>
              </button>
              <script>
                function createUniqueId(listElementObject){
                  var uId = (new Date()).getTime();
                  listElementObject.id = uId;
                  changePrice(listElementObject.id);
                }
                //Doesn't work for default values, only for actual values
                function changePrice(currId){
                  //Get the index of the list value we are trying to display
                  var lElement = document.getElementById(currId);
                  var elementInnerSize = parseInt(lElement.innerHTML.split(' ')[0]);
                  var num = sizeArrayJS.indexOf(elementInnerSize);

                  //Get the tag that displays the price for the current size of the product
                  var shopPagePrice = document.getElementById('productPrice');
                  shopPagePrice.innerHTML = "$" + priceArrayJS[num] + " CAD";

                  //Change the dropdown button size display
                  document.getElementById('product-size-dropdown-button').innerHTML = elementInnerSize+"g";
                }
              </script>
              <ul class="dropdown-menu">
                <?php
                  foreach($size as $value)
                  {
                    echo <<<HTML
                      <li><a class="dropdown-item" onclick="createUniqueId(this)">$value g</a></li>
                    HTML;
                  }
                ?>
              </ul>
            </div>
          </div>

          <button class="btn rounded-pill" type="button" style="background-color: black; color: white; margin-left: 0.5vw; margin-top: 1vw;">ADD TO CART</button>

          <h4 style="margin-top: 1vw;">Details:</h4>
          <div class="container-fluid" style="display: flex;">
            <!--Caffine Level Meter-->
            <div class="progress rounded-pill" style="width: 20%; height: 2.3rem;">
              <div class="progress-bar" id="caffine-level-bar" role="progressbar" style="width: 25%; background-color: #8A8A8F;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <script type="text/javascript">
              var caffineLevel = <?php echo $caffineLevel ?>;
              try{
                var caffinePercentage = (caffineLevel/5)*100;
              }catch(error){
                var caffinePercentage = 0;
              }
              document.getElementById('caffine-level-bar').style.width = caffinePercentage + "%";
            </script>
            <!--Type of Tea-->
            <div style="margin-left: 2vw;">
              <button class="btn rounded-pill" style="background-color: #ebe9e7;"><?php echo $type; ?></button>
            </div>
          </div>
          <!--Ingredients-->
          <div style="display: flex; margin-top: 1vw;">
            <p style="text-decoration: underline;">Ingredients: </p>
            <p style="text-decoration: none; margin-left: 0.5vw"><?php echo $ingredients; ?></p>
          </div>
          <!--Taste-->
          <div style="display: flex;">
            <p style="text-decoration: underline;">Taste: </p>
            <p style="text-decoration: none; margin-left: 0.5vw"><?php echo $taste;?></p>
          </div>

          <!--Best to make as-->
          <div style="display: flex;">
            <p style="text-decoration: underline;">Best to make as: </p>
            <p style="margin-left: 0.5vw"><?php echo $make;?></p>
          </div>

          <?php
            unset($_GET["currentImage"]);
            unset($_GET["productPageImages"]);
            unset($_GET["productName"]);
            unset($_GET["caffineLevel"]);
            unset($_GET["tIngredients"]);
            unset($_GET["tTaste"]);
            unset($_GET["bestMake"]);
            unset($_GET["tSize"]);
            unset($_GET["tPrice"]);
          ?>
        </div>
    </div>
    
    <!--Video Section-->
    <div class="container-fluid vid" style="margin-top: 5vw; margin-bottom: 3vw;">
      <?php
        $type = isset($_GET['tType']) ? $_GET['tType'] : "default";

        echo <<<HTML
          <h4 class="text-center product-page-video-title">HOW TO MAKE MATCHA LATTE</h4>
          <div class="text-center">
            <iframe style="text-align: center;" width="640" height="360" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
          </div>
        HTML;

        unset($_GET["tType"]);
      ?>
    </div>
</div>

<?php
  $query = "SELECT reviews FROM products WHERE productsName='$name'";
  $result = mysqli_query($connection, $query);

  if(!$result)
  {
    die("database query failed");
  }
  if($result != NULL)
  {
    //Get the reviews for the product
    $row = mysqli_fetch_assoc($result);
    $jsonReviews = $row['reviews'];
    $productReviews = json_decode($jsonReviews);
  }
  
?>

<div class="container-fluid" id="review-section" style="background-color: #E6F6EC;">
  <div class="row row-cols-2" style="padding-left: 3rem; padding-top: 3vw;">
    <div class="col-6">
      <h4>Product Reviews (<?php  ?>)</h4>
    </div>
    <div class="col-6">

    </div>
  </div>
  <div class="container-fluid" style="padding-top: 2vw; padding-bottom: 2vw;">
    <?php
      foreach($productReviews as $value)
      {
        echo <<<HTML
        <div class="container-fluid">
          <h6 style="font-weight: bold; padding-left: 3rem;">Anonymous</h6>
          <p style="padding-left: 3rem;">$value</p>
        </div>
        HTML;
      }
    ?>
  </div>
</div>

<?php
  include 'components/treatYourInbox.inc.php';
?>

<?php
  require 'components/footer.inc.php';
?>