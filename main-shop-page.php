<?php
  require 'components/head.inc.php';
?>

<?php
  include 'components/nav.inc.php';
?>

<?php
  include 'components/mainCarousel.inc.php';
?>

<?php
  include 'connectdb.php';
?>

<!--Shop Section-->

<div class="container">
  <!--Shop Controls-->
  <div class="container" id="shop-dropdowns">
    <div class="container-fluid" id="shop-controls-one" style=" margin-top: 1%; margin-bottom: 2%; display: inline-flex;">

      <div class="dropdown">
        <button class="btn rounded-pill dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #EBE9E7;">
          Type Of Tea
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" onclick="changeTypeOfTea('Herbal')">Herbal</a></li>
          <li><a class="dropdown-item" onclick="changeTypeOfTea('Green')">Green</a></li>
          <li><a class="dropdown-item" onclick="changeTypeOfTea('Black')">Black</a></li>
          <li><a class="dropdown-item" onclick="changeTypeOfTea('White')">White</a></li>
          <li><a class="dropdown-item" onclick="changeTypeOfTea('Matcha')">Matcha</a></li>
          <li><a class="dropdown-item" onclick="changeTypeOfTea('Rooibos')">Rooibos</a></li>
          <li><a class="dropdown-item" onclick="changeTypeOfTea('Oolong')">Oolong</a></li>
          <li><a class="dropdown-item" onclick="changeTypeOfTea('Chai')">Chai</a></li>
        </ul>
      </div>
      <div class="dropdown" style="padding-left: 1rem;">
        <button class="btn rounded-pill dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #EBE9E7;">
          Price
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
          <li><a class="dropdown-item" onclick="chagePrice('Low to High')">Low to High</a></li>
          <li><a class="dropdown-item" onclick="chagePrice('High to Low')">High to Low</a></li>
          <li><a class="dropdown-item" onclick="chagePrice('Under$10')">Under $10</a></li>
          <li><a class="dropdown-item" onclick="chagePrice('Under $20')">Under $20</a></li>
          <li><a class="dropdown-item" onclick="chagePrice('Under $40')">Under $40</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>

<!--Shop Items-->
<!--*Dynamically show the searched products depending on the database query-->
<div class="container" id="shop-items" style="overflow-x: hidden; margin-top: 1%; margin-bottom: 1%;">
  <div class="row row-cols-4 text-center">
    <?php

      $filter = isset($_GET["teaFilter"]) ? $_GET["teaFilter"] : 0;
      $type = isset($_GET["teaType"]) ? $_GET["teaType"] : 0;
      $collection = isset($_GET["collection"]) ? $_GET["collection"] : 0;
      $benefit = isset($_GET["benefit"]) ? $_GET["benefit"] : 0;

      if($filter != 0)
      {
        $query = "SELECT * FROM products WHERE teaFilter LIKE '%$filter%'";
      }
      else if($type != 0)
      {
        $query = "SELECT * FROM products WHERE productType='$type'";
      }
      else if($collection != 0)
      {
        $query = "SELECT * FROM products WHERE teaCollection='$collection'";
      }
      else if($benefit != 0)
      {
        $query = "SELECT * FROM products WHERE benefits LIKE '%$benefit%'";
      }
      else
      {
        $query = "SELECT * FROM PRODUCTS";
      }

      $result = mysqli_query($connection, $query);

      if(!$result)
      {
        die("database query failed");
      }

      while($row = mysqli_fetch_assoc($result))
      {
        echo <<<HTML
          <div class="card shop-item border-0">
            <img src="{$row['productImageSource']}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{$row["productsName"]}</h5>
              <p class="card-text">{$row["productDescription"]}</p>
              <a href="shop-item-page.php?productName={$row['productsName']}&currentImage={$row['productImageSource']}&caffineLevel={$row['caffineLevel']}&tType={$row['productType']}&tIngredients={$row['ingredients']}&tTaste={$row['taste']}&bestMake={$row['bestToMakeAs']}&sideImages={$row['productPageImages']}&tSize={$row['size']}&tPrice={$row['productPrice']}" class="btn rounded-pill shop-item-button" style="background-color:#EBE9E7; font-weight: bold;">Add To Cart</a>
            </div>
          </div>
        HTML;
      }

      unset($_GET['teaFilter']);
      unset($_GET['teaType']);
      unset($_GET['collection']);
      unset($_GET['benefit']);
      mysqli_free_result($result);
    ?>
  </div>
</div>

<?php
  include 'components/sustainableTea.inc.php';
?>

<?php
  include 'components/getInspired.inc.php';
?>

<?php
  include 'components/treatYourInbox.inc.php';
?>

<?php
  require 'components/footer.inc.php';
?>