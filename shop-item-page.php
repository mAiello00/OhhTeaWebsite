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
            $mainImage = isset($_GET["currentImage"]) ? $_GET["currentImage"] : "https://s.fotorama.io/1.jpg";
            $sImages = isset($_GET["productPageImages"]) ? $_GET["productPageImages"] : ["https://s.fotorama.io/1.jpg", "https://s.fotorama.io/2.jpg", "https://s.fotorama.io/3.jpg", "https://ucarecdn.com/382a5139-6712-4418-b25e-cc8ba69ab07f/-/stretch/off/-/resize/760x/"];

            echo <<<HTML
              <!--Side Images-->
              <div class="side-picture-container">
                <ul class="picture-list">
                  <li><img src="https://s.fotorama.io/1.jpg"></li>
                  <li><img src="https://s.fotorama.io/2.jpg"></li>
                  <li><img src="https://s.fotorama.io/3.jpg"></li>
                  <li><img src="https://ucarecdn.com/382a5139-6712-4418-b25e-cc8ba69ab07f/-/stretch/off/-/resize/760x/"></li>
                </ul>
              </div>
              <!--Current Product Image-->
              <div class="big-product-image">
                <img class="current-product-image" src="https://s.fotorama.io/1.jpg">
              </div>
            HTML;
          ?>
          
        </div>
        
        <!--Product Text-->
        <div class="col-md-6">
          <?php
            $name = $_GET["productName"];
            $caffineLevel = isset($_GET["caffineLevel"]) ? $_GET["caffineLevel"] : 0;
            $type = isset($_GET["tType"]) ? $_GET["tType"] : "default";
            $ingredients = isset($_GET["tIngredients"]) ? $_GET["tIngredients"] : "none";
            $taste = isset($_GET["tTaste"]) ? $_GET["tTaste"] : "default";
            $make = isset($_GET["bestMake"]) ? $_GET["bestMake"] : "default";
            if(isset($_GET['tSize']))
            {
              $size = isset($_GET['tSize']);
            }
            else
            {
              $arr = array(30, 50, 100);
              $JSONarr = json_encode($arr);
            } 

            echo <<<HTML
              <h1 id="product-name">$name</h1>

              <div class="container-fluid product-price-section" style="display: flex;">

                <div class="pricing product-price-container" style="margin-left: 1vw; margin-top: 1vw;">
                  <h3 id="product-price">$50 CAD</h3>
                </div>  
                <div class="dropdown pricing" id="size-selection" style="margin-left: 5vw; margin-top: 1vw;">
                  <button class="btn rounded-pill dropdown-toggle" type="button" id="product-size-dropdown-button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #EBE9E7;">
                    Default Size
                  </button>
                </div>

              </div>

              <button class="btn rounded-pill" type="button" style="background-color: black; color: white; margin-left: 0.5vw; margin-top: 1vw;">ADD TO CART</button>

              <h4 style="margin-top: 1vw;">Details:</h4>
              <div class="container-fluid" style="display: flex;">
                <!--TODO: Caffine Leve Meter-->
                <div>
                  <button class="btn rounded-pill">Caffine Level</button>
                </div>
                <!--Type of Tea-->
                <div>
                  <button class="btn rounded-pill">$type</button>
                </div>
              </div>

              <!--Ingredients-->

              <!--Taste-->


              <!--Best to make as-->
            HTML;

            unset($_GET["currentImage"]);
            unset($_GET["productPageImages"]);
            unset($_GET["productName"]);
            unset($_GET["caffineLevel"]);
            unset($_GET["tType"]);
            unset($_GET["tIngredients"]);
            unset($_GET["tTaste"]);
            unset($_GET["bestMake"]);
            unset($_GET["tSize"]);
          ?>
        </div>
    </div>
</div>

<?php
  include 'components/treatYourInbox.inc.php';
?>

<?php
  require 'components/footer.inc.php';
?>