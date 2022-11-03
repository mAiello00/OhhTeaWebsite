<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea Quiz</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../customcss/navbar.css">
    <link rel="stylesheet" href="../customcss/quiz-page.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    
    <script src="../customjs/side-nav.js"></script>
    <script src="../customjs/teaDropdown.js"></script>
</head>
<body>

  <!--Top Carousel-->
  <div class="container-fluid">
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
      <a href="../quiz/quiz-page.php">Tea Quiz</a>
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
                <a href="../index.html">
                  <img src="../img/ohhTeaLogo.png" id="companyLogo">
                </a>              </div>
            </li>
          </ul>

          <!--Icons-->
          <div class="col navbar-icons-wrapper">
              <a href="#">
                <button class="icon-button">
                  <img src="../img/magnifying-glass-solid.svg"class="navbar-icon-picture">
                </button> 
              </a>
              <a href="../profile/account-profile.php">
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
              <a class="nav-link" href="../quiz/quiz-page.php">Tea Quiz</a>
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

  <!--Fav Tea Main Image-->
  <div class="container-fluid quiz-page-main-image-wrapper">
    <img src="../img/one.png" id="quiz-page-main-image">
    <div class="quiz-page-image-text">
      <h5 class="quiz-page-image-title">FIND YOUR <br> FAV TEA</h5>
      <p class="quiz-page-image-text">15% off all Subscriptions <br>Free shipping on all CAD orders over $50</p>
    </div>
  </div>

  <!------------------------------------------------------------------------------------------------------------------------------>
  <!------------------------------------------------------------------------------------------------------------------------------>
  <!------------------------------------------------------------------------------------------------------------------------------>

  <!--Quiz Content-->
  <div class="container-fluid">
    <div class="quiz-question-wrapper">
      
      <div class="quiz-question" id="take-quiz-here">
        <h3 class="quiz-question-title">TAKE YOUR TEA QUIZ HERE</h3>
        <button type="button" class="btn rounded-pill take-quiz-button">TAKE QUIZ</button>
      </div>
      <div class="quiz-question hidden-question" id="question-one">
        <h3 class="quiz-question-title">HOW DO YOU PREFER TO BREW YOUR TEA?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">LOOSE LEAF</button>
          </div>
          <div class="col text-center">
          <button class="btn rounded-pill quiz-question-button">BAGGED</button>
          </div>
        </div>
      </div>
      <div class="quiz-question hidden-question" id="question-two">
        <h3 class="quiz-question-title">HOW DO YOU LIKE YOUR TEA?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">GOTTA LOOK FANCY</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">MILK AND SUGAR</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">HOT HOT HOT</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">BLACK. NOTHING ELSE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">HONEY AND LEMON</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">ICE COLD PLEASE!</button>
          </div>
        </div>
      </div>
      <div class="quiz-question hidden-question" id="question-three">
        <h3 class="quiz-question-title">CAFFINE LEVEL?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">CAFFINE FREE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">LOW CAFFINE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">HIGH CAFFINE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">LOVE THEM ALL!</button>
          </div>
        </div>
      </div>
      <div class="quiz-question hidden-question" id="question-four">
        <h3 class="quiz-question-title">HOW SHOULD YOUR TEA TASTE?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">FRUITY</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">FLORAL</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">SWEET</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">TRADITIONAL</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">SPICED</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">NATURAL</button>
          </div>
        </div>
      </div>
      <div class="quiz-question hidden-question" id="question-five">
        <h3 class="quiz-question-title">WHY DO YOU DRINK TEA?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">FOR THE TASTE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">FOR WELLNESS</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">FOR ENERGY</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">TO CALM DOWN</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">TO SLEEP</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">TO DETOX/DIGEST</button>
          </div>
        </div>
      </div>
      <div class="quiz-question hidden-question" id="question-six">
        <h3 class="quiz-question-title">WHAT'S?</h3>
        <div class="row row-cols-3">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">FOR THE TASTE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">FOR WELLNESS</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button">FOR ENERGY</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>