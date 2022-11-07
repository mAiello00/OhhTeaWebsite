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
        $query = "SELECT * FROM products WHERE teaFilter='$filter'";
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
              <a href="#" class="btn rounded-pill shop-item-button" style="background-color:#EBE9E7; font-weight: bold;">Add To Cart</a>
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