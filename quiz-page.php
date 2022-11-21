<?php
  require 'components/head.inc.php';
?>

<?php
  include 'components/nav.inc.php';
?>

<?php
  include 'connectdb.php';
?>

  <!--Fav Tea Main Image-->
  <div class="container-fluid quiz-page-main-image-wrapper">
    <img src="img/one.png" id="quiz-page-main-image">
    <div class="quiz-page-image-text">
      <h5 class="quiz-page-image-title">FIND YOUR <br> FAV TEA</h5>
      <p class="quiz-page-image-text">15% off all Subscriptions <br>Free shipping on all CAD orders over $50</p>
    </div>
  </div>

  <!------------------------------------------------------------------------------------------------------------------------------>
  <!------------------------------------------------------------------------------------------------------------------------------>
  <!------------------------------------------------------------------------------------------------------------------------------>

  <!-- <?php
  
    $query = "SELECT * FROM products";
    $result = mysqli_query($connection, $query);

    if(!$result)
    {
      die("database query failed");
    }

    while($row = mysqli_fetch_assoc($result))
    {
      echo <<<HTML
        {$row['productsName']}
      HTML;
    }
  ?> -->

  <!--Quiz Content-->
  <div class="container-fluid">
    <div class="quiz-question-wrapper">
      
      <div class="quiz-question" id="take-quiz-here">
        <h3 class="quiz-question-title">TAKE YOUR TEA QUIZ HERE</h3>
        <button type="button" class="btn rounded-pill take-quiz-button" onclick="startQuiz()">TAKE QUIZ</button>
      </div>

      <div class="quiz-question no-show" id="question-one" style="display: none;">
        <h3 class="quiz-question-title">HOW DO YOU PREFER TO BREW YOUR TEA?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionTwo('looseLeaf')" id="q-1-a-1">LOOSE LEAF</button>
          </div>
          <div class="col text-center">
          <button class="btn rounded-pill quiz-question-button" onclick="startQuestionTwo('bagged')" id="q-1-a-2">BAGGED</button>
          </div>
        </div>
      </div>

      <div class="quiz-question " id="question-two" style="display: none;">
        <h3 class="quiz-question-title">HOW DO YOU LIKE YOUR TEA?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionThree('fancy')" id="q-2-a-1">GOTTA LOOK FANCY</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionThree('milkAndSugar')" id="q-2-a-2">MILK AND SUGAR</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionThree('hot')"id="q-2-a-3">HOT HOT HOT</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionThree('black')" id="q-2-a-4">BLACK. NOTHING ELSE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionThree('honeyAndLemon')" id="q-2-a-5">HONEY AND LEMON</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionThree('iceCold')" id="q-2-a-6">ICE COLD PLEASE!</button>
          </div>
        </div>
      </div>

      <div class="quiz-question " id="question-three" style="display: none;">
        <h3 class="quiz-question-title">CAFFINE LEVEL?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFour('caffineFree')" id="q-3-a-1">CAFFINE FREE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFour('lowCaffine')" id="q-3-a-2">LOW CAFFINE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFour('highCaffine')" id="q-3-a-3">HIGH CAFFINE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFour('allCaffine')" id="q-3-a-4">LOVE THEM ALL!</button>
          </div>
        </div>
      </div>

      <div class="quiz-question " id="question-four" style="display: none;">
        <h3 class="quiz-question-title">HOW SHOULD YOUR TEA TASTE?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFive('fruity')" id="q-4-a-1">FRUITY</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFive('floral')" id="q-4-a-2">FLORAL</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFive('sweet')" id="q-4-a-3">SWEET</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFive('traditional')" id="q-4-a-4">TRADITIONAL</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFive('spiced')" id="q-4-a-5">SPICED</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionFive('natural')" id="q-4-a-6">NATURAL</button>
          </div>
        </div>
      </div>

      <div class="quiz-question " id="question-five" style="display: none;">
        <h3 class="quiz-question-title">WHY DO YOU DRINK TEA?</h3>
        <div class="row row-cols-2">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionSix('forTaste')" id="q-5-a-1">FOR THE TASTE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionSix('forWellness')" id="q-5-a-2">FOR WELLNESS</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionSix('forEnergy')" id="q-5-a-3">FOR ENERGY</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionSix('toCalmDown')" id="q-5-a-4">TO CALM DOWN</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionSix('toSleep')" id="q-5-a-5">TO SLEEP</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="startQuestionSix('toDetoxDigest')" id="q-5-a-6">TO DETOX/DIGEST</button>
          </div>
        </div>
      </div>

      <div class="quiz-question " id="question-six" style="display: none;">
        <h3 class="quiz-question-title">WHAT'S?</h3>
        <div class="row row-cols-3">
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="quizEnd('endTaste')" id="q-6-a-1">FOR THE TASTE</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="quizEnd('endWellness')" id="q-6-a-2">FOR WELLNESS</button>
          </div>
          <div class="col text-center">
            <button class="btn rounded-pill quiz-question-button" onclick="quizEnd('endEnergy')" id="q-6-a-3">FOR ENERGY</button>
          </div>
        </div>
      </div>

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