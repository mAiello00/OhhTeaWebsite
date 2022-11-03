<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Shop</title>
      <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" href="../customcss/shopstylesheet.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
      <script src="../customjs/side-nav.js"></script>
      <script src="../customjs/teaDropdown.js"></script>
  </head>
  <body>
    <?php
      include 'connectdb.php';
    ?>

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
    <script src="../customjs/countdown-timer.js"></script>

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--SideNav-->
    <div class="sideNavigation" id="sideNav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Sale</a>
      <a href="#">Tea</a>
      <a href="#">Sweeteners</a>
      <a href="#">Matcha</a>
      <a href="#">Wellness</a>
      <a href="#">Accessories</a>
      <a href="#">Bundles</a>
      <a href="#">Gifts</a>
      <a href="#">Tea Quiz</a>
      <a href="#">Subscriptions</a>
      <a href="#">How To Make...</a>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--Navbar-->
    <nav class="navbar navbar-expand-md navbar-light sticky-top bg-white">
      <div class="container-fluid" id="top-nav-contianer">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-column align-items-center text-center" id="navbarCollapse">

          <!--Top Part of Navbar-->
          <ul class="navbar-nav flex-row">
            <li class="nav-item">
              <a class="btn rounded-pill nav-pop-out-button" onclick="openNav()">
                <img class="menu-icon" src="../img/menu-icon.png" alt="">
              </a>
            </li>
            <li class="nav-item">
              <div class="d-flex align-items-center justify-content-center" id="companyHeader">
                <p id="temp-logo">OHH TEA</p>
                <!-- <img src="../img/OHH TEA Logo.png" id="companyLogo"> -->
              </div>
            </li>
          </ul>

          <!--Icons-->
          <div class="col navbar-icons-wrapper">
              <a href="#">
                <button class="icon-button">
                  <img src="../img/magnifying-glass-solid.svg"class="navbar-icon-picture">
                </button> 
              </a>
              <a href="#">
                <button class="icon-button">
                  <img src="../img/user-solid.svg"class="navbar-icon-picture">
                </button>
              </a>
              <a href="#" >
                <button class="icon-button">
                  <img src="../img/heart-solid.svg"class="navbar-icon-picture">
                </button>
              </a>
              <a href="#">
                <button class="icon-button">
                  <img src="../img/cart-shopping-solid.svg"class="navbar-icon-picture">
                </button>
              </a> 
          </div>

          <!--Bottom Part of Navbar-->
          <ul class="navbar-nav justify-content-center w-100 font-weight-bold" id="nav-collection">
            <li class="nav-item active">
              <a href="#" class="nav-link" style="color: red;">Sale</a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link" onclick="teaDrop()">Tea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sweeteners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Matcha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Wellness</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bundles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gifts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tea Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Subscriptions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">How To Make...</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Dropdowns-->

        <!--Tea Dropdown-->
        <div class="container-fluid tea-dropdown float-top" id="tea-drop">
          <a href="javascript:void(0)" class="dropClose" onclick="closeAll()" >&times;</a>
          <div class="row row-cols-4">

            <div class="col text-center">
              <ul class="tea-dropdown-col">
                <li>
                  <a href="#" class="tea-dropdown-item">New Arrivals</a>
                </li>
                <li>
                  <a href="#" class="tea-dropdown-item">Best Sellers</a>
                </li>
                <li>
                  <a href="#" class="tea-dropdown-item">Loose Leaf</a>
                </li>
                <li>
                  <a href="#" class="tea-dropdown-item">Bagged Tea</a>
                </li>
                <li>
                  <a href="#" class="tea-dropdown-item">Organic</a>
                </li>
                <li>
                  <a href="#" class="tea-dropdown-item">De-Caffinated</a>
                </li>
                <li>
                  <a href="#" class="tea-dropdown-item">Kids Favourites</a>
                </li>
                <li>
                  <a href="#" class="tea-dropdown-item">Pregnancy Safe</a>
                </li>
                <li>
                  <a href="#" class="tea-dropdown-item">Learn More About Tea!</a>
                </li>
              </ul>
            </div>

            <div class="col">
              <ul class="tea-dropdown-col">
                <li>
                  <a class="tea-dropdown-item dropdown-tea-title">Tea Types</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Herbal</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Green</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Black</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">White</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Matcha</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Rooibos</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Oolong</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Chai</a>
                </li>
              </ul>
            </div>

            <div class="col">
              <ul class="tea-dropdown-col">
                <li>
                  <a href="" class="tea-dropdown-item dropdown-tea-title">Tea By Collection</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Fall Collection</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Winter Collection</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Summer Collection</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Spring Collection</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Breakfast Collection</a>
                </li>
              </ul>
            </div>

            <div class="col">
              <ul class="tea-dropdown-col">
                <li>
                  <a href="" class="tea-dropdown-item dropdown-tea-title">Tea By Benefit</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Cold</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Immunity</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Sleep</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Relax</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Detox & Digest</a>
                </li>
                <li>
                  <a href="" class="tea-dropdown-item">Energy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

      <!--Main Carousel-->
      <div class="container-fluid large-main-carousel">
        <div id="mainCarouselLarge" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#mainCarouselLarge" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#mainCarouselLarge" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#mainCarouselLarge" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner main-carousel-image-wrapper">
              <div class="carousel-item active" data-bs-interval="7000">
                <img src="../img/one.png" class="d-block w-100 main-carousel-image" alt="cOne" id="first-carousel-image">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="main-carousel-image-title">SNATCH <br> THE <br> SATCHE.</h5>
                  <p class="main-carousel-image-text">FREE straw set with any purchade over $30 CAD <br> while supplies last <br> FREE shipping on all orders over $50 CAD</p>
                  <a>
                    <button class="btn rounded-pill btn-lg main-carousel-image-button">Shop Best Sellers</button>
                  </a>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="7000">
                <img src="../img/two.png" class="d-block w-100 main-carousel-image main-carousel-image" alt="cTwo">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="main-carousel-image-title">SNATCH <br> THE <br> SATCHE.</h5>
                  <p class="main-carousel-image-text">FREE straw set with any purchade over $30 CAD <br> while supplies last <br> FREE shipping on all orders over $50 CAD</p>
                  <a>
                    <button class="btn rounded-pill btn-lg main-carousel-image-button">Shop Best Sellers</button>
                  </a>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="7000">
                <img src="../img/three.png" class="d-block w-100 main-carousel-image" alt="cThree">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="main-carousel-image-title">SNATCH <br> THE <br> SATCHE.</h5>
                  <p class="main-carousel-image-text">FREE straw set with any purchade over $30 CAD <br> while supplies last <br> FREE shipping on all orders over $50 CAD</p>
                  <a>
                    <button class="btn rounded-pill btn-lg main-carousel-image-button">Shop Best Sellers</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
    </div>

    <!--Small Main Carousel-->
    <div class="container-fluid small-main-carousel">
      <div id="mainCarouselSmall" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarouselSmall" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainCarouselSmall" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#mainCarouselSmall" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner main-carousel-image-wrapper">
            <div class="carousel-item active" data-bs-interval="7000">
              <img src="../img/one.png" class="d-block w-100 main-carousel-image">
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="../img/two.png" class="d-block w-100 main-carousel-image main-carousel-image">
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="../img/three.png" class="d-block w-100 main-carousel-image">
            </div>
          </div>
        </div>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--Shop Section-->
    <?php
    //Create the div to hold the shop elements that were searched
    //Query the database depending on which items were serached
    //Dynamially create the ship item divs using javascript and the results we got from 
    //out query

      $selection = "";
      
    ?>
    

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--Our Sustainable Tea-->
    <div class="container-fluid sustainable-tea-container">
      <p class="text-center sustainable-tea-title">OUR SUSTAINABLE TEA</p>

      <div class="row row-cols-3">
        <div class="card bg-transparent border-0">
          <img src="../img/one.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center sustainable-tea-header">RESPONSIBELY MADE</h5>
            <p class="card-text text-center sustainable-tea-description">All products are made responsibely <br> and ethically, ensuring the best <br> possibly standards and labour <br> practices</p>
          </div>
        </div>
        <div class="card bg-transparent border-0">
          <img src="../img/two.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center sustainable-tea-header">SUSTAINABLY PACKAGED</h5>
            <p class="card-text text-center sustainable-tea-description">We try to include as many <br> environmentally friendly materials as <br> possible, without degrading our <br> products</p>
          </div>
        </div>
        <div class="card bg-transparent border-0">
          <img src="../img/three.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center sustainable-tea-header">SUSTAINABLY SOURCED</h5>
            <p class="card-text text-center sustainable-tea-description">All products listed are carefully <br> sourced, making sure everything <br> we share with you is premium <br> quality</p>
          </div>
        </div>
      </div>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--Get Inspired-->
    <p class="get-inspired-title">GET INSPIRED</p>
    <div id="getInspiredCarousel" class="carousel carousel-dark slide larger-carousel" data-bs-ride="carousel">
      <div class="carousel-inner large-screen-carousel">
        <div class="carousel-item active">
          <div class="get-inspired-cards-wrapper">
            <div class="card card-carousel-text tri-carousel-card">
              <div class="carousel-card-image-wrapper">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div>
              <div class="card-body">
                <h5 class="card-title card-title-text">Banana Hibiscus <br> Latte</h5>
                <a href="#"  class="btn rounded-pill border-dark card-carousel-button">WATCH NOW</a>
              </div>
            </div>
            <div class="card card-carousel-text tri-carousel-card">
              <div class="carousel-card-image-wrapper">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div>    
              <div class="card-body">
                <h5 class="card-title card-title-text">Matcha Cinnamon <br> Latte</h5>
                <a href="#" class="btn rounded-pill border-dark card-carousel-button">WATCH NOW</a>
              </div>
            </div>
            <div class="card card-carousel-text tri-carousel-card">
              <div class="carousel-card-image-wrapper">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div>
              <div class="card-body">
                <h5 class="card-title card-title-text">Matcha Coconut <br> Latte</h5>
                <a href="#" class="btn rounded-pill border-dark card-carousel-button">WATCH NOW</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="carousel-item">
          <div class="get-inspired-cards-wrapper">
            <div class="card card-carousel-text tri-carousel-card">
              <div class="carousel-card-image-wrapper">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div>  
              <div class="card-body">
                <h5 class="card-title card-title-text">Banana Hibiscus <br> Latte</h5>
                <a href="#" class="btn rounded-pill border-dark card-carousel-button">WATCH NOW</a>
              </div>
            </div>
            <div class="card card-carousel-text tri-carousel-card">
              <div class="carousel-card-image-wrapper">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div>
              <div class="card-body">
                <h5 class="card-title card-title-text">Matcha Cinnamon <br> Latte</h5>
                <a href="#" class="btn rounded-pill border-dark card-carousel-button">WATCH NOW</a>
              </div>
            </div>
            <div class="card card-carousel-text tri-carousel-card">
              <div class="carousel-card-image-wrapper">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div> 
              <div class="card-body">
                <h5 class="card-title card-title-text">Matcha Coconut <br> Latte</h5>
                <a href="#" class="btn rounded-pill border-dark card-carousel-button">WATCH NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Small Screen Carousel-->
    <div id="getInspiredCarouselSmall" class="carousel carousel-dark slide smaller-carousel" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="get-inspired-cards-wrapper">
            <div class="card card-carousel-text duo-carousel-card">
              <div class="carousel-card-image-wrapper">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div>  
              <div class="card-body">
                <h5 class="card-title card-title-text">Hibiscus Tea <br> $5.99</h5>
                <a href="#" class="btn rounded-pill border-dark card-carousel-button">ADD TO CART</a>
              </div>
            </div>
            <div class="card card-carousel-text duo-carousel-card">
              <div class="carousel-card-image-wrapper">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div>  
              <div class="card-body">
                <h5 class="card-title card-title-text">Hibiscus Tea <br> $5.99</h5>
                <a href="#" class="btn rounded-pill border-dark card-carousel-button">ADD TO CART</a>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="top-picks-cards-wrapper">
            <div class="card card-carousel-text duo-carousel-card">
              <div class="carousel-card-image-wrapper ">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div>  
              <div class="card-body">
                <h5 class="card-title card-title-text">Hibiscus Tea <br> $5.99</h5>
                <a href="#" class="btn rounded-pill border-dark card-carousel-button">ADD TO CART</a>
              </div>
            </div>
            <div class="card card-carousel-text duo-carousel-card">
              <div class="carousel-card-image-wrapper">
                <img class="card-img-top" src="../img/plantone.jpg">
              </div>  
              <div class="card-body">
                <h5 class="card-title card-title-text">Hibiscus Tea <br> $5.99</h5>
                <a href="#" class="btn rounded-pill border-dark card-carousel-button">ADD TO CART</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--Treat Your Inbox-->
    <div class="container-fluid treat-your-inbox-wrapper">
      <div class="spacer"></div>
      <div class="spacer"></div>

      <div class="row row-cols-2">

        <div class="col treat-your-inbox-title">
          <p class="text-center">DON'T BE SHY...<br>TREAT YOUR INBOX</p>
        </div>

        <div class="col text-center">
          <div class="input-group mb-3 email-input">
            <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn email-button" type="button" id="button-addon2">
              <img src="../img/arrow-right.png" class="email-enter-image">
            </button>
          </div>

          <p>Receive our newsletter on the latest deals <br> and happenings + get 10% off your first <br> order.</p>
        </div>
      </div>

      <div class="spacer"></div>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------>

    <!--Footer-->
    <div class="spacer"></div>
    <div class="container-fluid">
      <div class="row row-cols-4">
        <div class="col">
          <ul class="footer-list">
            <li class="footer-element">
              <a class="footer-element-text footer-title" href="#">BRAND INFO</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">About Us</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">Sustainability</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">Privacy Policy</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">Terms and Conditions</a>
            </li>
            
          </ul>
        </div>
        <div class="col">
          <ul class="footer-list">
            <li class="footer-element">
              <a class="footer-element-text footer-title" href="#">CUSTOMER SUPPORT</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">Contact Us</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">FAQs</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">Returns and Exchanges</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">Shipping and Handling</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">Terms of Sale</a>
            </li>
          </ul>
        </div>
        <div class="col">
          <ul class="footer-list">
            <li class="footer-element">
              <a class="footer-element-text footer-title" href="#">ACCOUNT HELP</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">Create an Account</a>
            </li>
            <li class="footer-element">
              <a class="footer-element-text" href="#">Sign In</a>
            </li>
          </ul>
        </div>
        <div class="col">
          <ul></ul>
        </div>
      </div>
    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>