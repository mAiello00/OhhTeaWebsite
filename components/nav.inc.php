<!--Top Carousel-->
<div class="container">
      <div id="topCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <p class="top-carousel-text">Free shipping on orders over $30 CAD</p>
          </div>
          <div class="carousel-item">
            <p class="top-carousel-text">Matcha 15% off until Jan 30th</p>
          </div>
          <div class="carousel-item">
            <p class="top-carousel-text">Spring Teas back instock soon!</p>
          </div>
        </div>
        <button class="carousel-control-prev top-control-left" type="button" data-bs-target="#topCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next top-control-right" type="button" data-bs-target="#topCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
      </div>
    </div>
    

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--Timer-->
    <div class="container-fluid main-timer-section">
      <p id="timer-value"></p>
    </div>
    <script src="customjs/countdown-timer.js"></script>

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--SideNav-->
    <div class="sideNavigation" id="sideNav"style="padding-top: 6vw;">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="main-shop-page.php?teaFilter=sale">Sale</a>
      <a href="main-shop-page.php">Tea</a>
      <a href="main-shop-page.php?teaFilter=sweetener">Sweeteners</a>
      <a href="main-shop-page.php?teaType=matcha">Matcha</a>
      <a href="main-shop-page.php?teaFilter=wellness">Wellness</a>
      <a href="main-shop-page.php?teaFilter=accessories">Accessories</a>
      <a href="main-shop-page.php?teaFilter=bundle">Bundles</a>
      <a href="main-shop-page.php?teaFilter=gift">Gifts</a>
      <a href="quiz-page.php">Tea Quiz</a>
      <a href="#">Subscriptions</a>
      <a href="#">Know Your Tea</a>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--Navbar-->
    <nav class="navbar navbar-expand-md navbar-light sticky-top bg-white" style="background-color: white;">
      <div class="container-fluid bg-white" id="top-nav-contianer">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-column align-items-center text-center" id="navbarCollapse">

          <!--Top Part of Navbar-->
          <ul class="navbar-nav flex-row">
            <li class="nav-item">
              <a class="btn rounded-pill nav-pop-out-button" onclick="openNav()">
                <img class="menu-icon" src="img/menu-icon.png" alt="">
              </a>
            </li>
            <li class="nav-item">
              <div class="align-items-center justify-content-center" id="companyHeader">
                <a href="index.php">
                  <img src="img/ohhTeaLogo.png" id="companyLogo" style="max-width: 100px;">
                </a>  
              </div>
            </li>
          </ul>

          <!--Icons-->
          <div class="col navbar-icons-wrapper">
              <a href="#">
                <button class="icon-button">
                  <img src="img/magnifying-glass-solid.svg"class="navbar-icon-picture">
                </button> 
              </a>
              <a href="profile/account-profile.php">
                <button class="icon-button">
                  <img src="img/user-solid.svg"class="navbar-icon-picture">
                </button>
              </a>
              <a href="#" >
                <button class="icon-button">
                  <img src="img/heart-solid.svg"class="navbar-icon-picture">
                </button>
              </a>
              <a href="#">
                <button class="icon-button">
                  <img src="img/cart-shopping-solid.svg"class="navbar-icon-picture">
                </button>
              </a> 
          </div>

          <!--Bottom Part of Navbar-->
          <ul class="navbar-nav justify-content-center w-100 font-weight-bold" id="nav-collection">
            <li class="nav-item active">
              <a href="main-shop-page.php?teaFilter=sale" class="nav-link" style="color: red;">Sale</a>
            </li>
            <li class="nav-item dropdown position-static">
              <a href="#" class="nav-link dropdown-toggle" id="main-nav-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tea</a>
              <ul class="dropdown-menu w-100 border-0" aria-labelledby="main-nav-dropdown" style="top: 90%; border-bottom-left-radius: 2rem !important; border-bottom-right-radius: 2rem !important; border-style=solid !important; border-color = black; border-width: 1px;">
                <div class="row">
                  <div class="col-sm-3" style="padding-left: 6rem;">
                    <li>
                      <a href="main-shop-page.php?teaFilter=NewReleases" class="tea-dropdown-item">New Arrivals</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaFilter=BestSellers" class="tea-dropdown-item">Best Sellers</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaFilter=LooseLeaf" class="tea-dropdown-item">Loose Leaf</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaFilter=BaggedTea" class="tea-dropdown-item">Bagged Tea</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaFilter=Organic" class="tea-dropdown-item">Organic</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaFilter=DeCaffinated" class="tea-dropdown-item">De-Caffinated</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaFilter=KidsFavourite" class="tea-dropdown-item">Kids Favourites</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaFilter=PregnancySafe" class="tea-dropdown-item">Pregnancy Safe</a>
                    </li>
                    <li style="padding-bottom: 2rem;">
                      <a href="#" class="tea-dropdown-item">Learn More About Tea!</a>
                    </li>
                  </div>
                  <div class="col-sm-3" style="padding-left: 4rem;">
                    <li>
                      <a class="tea-dropdown-item dropdown-tea-title">Tea Types</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaType=herbal" class="tea-dropdown-item">Herbal</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaType=green" class="tea-dropdown-item">Green</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaType=black" class="tea-dropdown-item">Black</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaType=white" class="tea-dropdown-item">White</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaType=matcha" class="tea-dropdown-item">Matcha</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaType=rooibos" class="tea-dropdown-item">Rooibos</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaType=oolong" class="tea-dropdown-item">Oolong</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?teaType=chai" class="tea-dropdown-item">Chai</a>
                    </li>
                  </div>
                  <div class="col-sm-3">
                    <li>
                      <a href="" class="tea-dropdown-item dropdown-tea-title">Tea By Collection</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?collection=fall" class="tea-dropdown-item">Fall Collection</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?collection=winter" class="tea-dropdown-item">Winter Collection</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?collection=summer" class="tea-dropdown-item">Summer Collection</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?collection=spring" class="tea-dropdown-item">Spring Collection</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?collection=breakfast" class="tea-dropdown-item">Breakfast Collection</a>
                    </li>
                  </div>
                  <div class="col-sm-3">
                    <li>
                      <a href="" class="tea-dropdown-item dropdown-tea-title">Tea By Benefit</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?benefit=cold" class="tea-dropdown-item">Cold</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?benefit=immunity" class="tea-dropdown-item">Immunity</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?benefit=sleep" class="tea-dropdown-item">Sleep</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?benefit=relax" class="tea-dropdown-item">Relax</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?benefit=detoxdigest" class="tea-dropdown-item">Detox & Digest</a>
                    </li>
                    <li>
                      <a href="main-shop-page.php?benefit=energy" class="tea-dropdown-item">Energy</a>
                    </li>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main-shop-page.php?teaFilter=sweetener">Sweeteners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main-shop-page.php?teaType=matcha">Matcha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main-shop-page.php?teaFilter=wellness">Wellness</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main-shop-page.php?teaFilter=accessories">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="main-shop-page.php?teaFilter=bundle">Bundles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main-shop-page.php?teaFilter=gift">Gifts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quiz-page.php">Tea Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Subscriptions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Know Your Tea</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>