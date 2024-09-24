<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>The Health Makeover Food Articles</title>

  <script src="https://kit.fontawesome.com/f9e06076a8.js" crossorigin="anonymous"></script>

  <!--CSS Stylesheets-->
  <link rel="stylesheet" href="styles/foodArticlesStyles.css">


</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="main">
    <h2 class="h2-main">Here are some recipes that we encourage you to try!</h2>
    <div class="cards_btns">
      <button class="cards__page_btn" onclick="prev()"><i class="fa-solid fa-chevron-left"> </i> Back</button>
      <span id="pa">1 / 3</span>
      <button class="cards__page_btn" onclick="next()">Next <i class="fa-solid fa-chevron-right"></i></button>
    </div>
    <ul class="cards">
      <!-- Recipe 1: -->
<li class="cards_item">
  <div class="card">
      <div class="card_image"><img id="food-image1" src="images/food1.webp" alt="mixed vegetable salad in a mason jar."></div>
      <div class="card_content">
          <h2 id="titlu1" class="card_title"></h2>
          <div class="card_text">
              <p id="servings1"></p>
              <p><em></em></p>
              <ul id="list1"></ul>
              <p><em></em></p>
              <ul id="directions1"></ul>
          </div>
      </div>
  </div>
</li>

      <!-- Recipe 2: -->
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img id="food-image2"
              src="images/food2.webp"
              alt="a Reuben sandwich on wax paper."></div>
          <div class="card_content">
            <h2 id="titlu2" class="card_title"></h2>
            <div class="card_text">
              <p id="servings2"></p>
              <p><em></em></p>
              <ul id="list2">
              </ul>
              <p><em></em></p>
              <ul id="directions2"></ul>
            </div>
          </div>
        </div>
      </li>

      <!-- Recipe 3: -->
      <li class="cards_item">
        <div id="card" class="card">
          <div class="card_image"><img id="food-image3"
            src="images/food3.webp"
            alt="A side view of a plate of figs and berries."></div>
          <div class="card_content">
            <h2 id="titlu3" class="card_title"></h2>
            <div class="card_text">
              <p id="servings3"></p>
              <p><em></em></p>
              <ul id="list3"></ul>
              <p><em></em></p>
              <ul id="directions3"></ul>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>


  </div>
  <?php include 'footer.php'; ?>
  <script src="food-articles.js" charset="utf-8"></script>
</body>

</html>