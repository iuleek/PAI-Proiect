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
      <!-- Recipe 1: Fiber-Packed Spicy White Bean & Spinach Salad -->
      <li class="cards_item">
        <div class="card">
          <div  class="card_image"><img id="food-image1"
              src="images/food1.webp"
              alt="mixed vegetable salad in a mason jar."></div>
          <div class="card_content">
            <h2 id="titlu1" class="card_title">Fiber-Packed Spicy White Bean & Spinach Salad • 10mins</h2>
            <div class="card_text">
              <p id="servings1">Servings: 4</p>
              <p><em>Ingredients:</em></p>
              <ul id="list1">
                <li>2 (15-ounce) cans no-salt-added cannellini beans, rinsed</li>
                <li>1/3 cup whole-milk plain yogurt</li>
                <li>3/4 teaspoon ras el hanout</li>
                <li>1/2 teaspoon refrigerated garlic paste</li>
                <li>1/2 teaspoon salt</li>
                <li>1/2 teaspoon honey</li>
                <li>2 tablespoons extra-virgin olive oil</li>
                <li>1 tablespoon red-wine vinegar</li>
                <li>1 tablespoon harissa paste</li>
                <li>1 (5 ounce) package baby spinach</li>
                <li>1 cup julienned carrots</li>
                <li>1/4 cup unsalted roasted almonds, chopped</li>
                <li>3 tablespoons golden raisins</li>
              </ul>
              <p><em>Directions:</em></p>
              <ul>
                <li class="recipe__step"><strong>Step 1:</strong> Combine beans, yogurt, ras el hanout, garlic paste,
                  salt, and honey in a medium bowl; stir to incorporate, coarsely mashing beans if desired.</li>
                <li class="recipe__step"><strong>Step 2:</strong> Whisk oil, vinegar, and harissa together in a large
                  bowl. Add spinach, carrots, almonds, and raisins; toss to coat. Serve the spinach mixture with the
                  bean salad.</li>
              </ul>
            </div>
          </div>
        </div>
      </li>

      <!-- Recipe 2: Stuffed Pepper Casserole -->
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img id="food-image2"
              src="images/food2.webp"
              alt="a Reuben sandwich on wax paper."></div>
          <div class="card_content">
            <h2 id="titlu2" class="card_title">Stuffed Pepper Casserole • 55mins</h2>
            <div class="card_text">
              <p id="servings2">Servings: 6</p>
              <p><em>Ingredients:</em></p>
              <ul id="list2">
                <li>2 tablespoons extra-virgin olive oil</li>
                <li>1 pound 90%-lean ground beef</li>
                <li>1 large red onion, thinly sliced</li>
                <li>3 medium multicolored bell peppers, thinly sliced</li>
                <li>6 cloves garlic, chopped</li>
                <li>2 teaspoons smoked paprika</li>
                <li>2 teaspoons dried oregano</li>
                <li>1 teaspoon salt</li>
                <li>3/4 teaspoon ground pepper</li>
                <li>2 tablespoons tomato paste</li>
                <li>1 (14.5 ounce) can no-salt-added fire-roasted diced tomatoes, drained</li>
                <li>1 (8.8-ounce) package cooked brown rice</li>
                <li>1/2 cup unsalted beef broth</li>
                <li>1 cup shredded low-moisture part-skim mozzarella cheese</li>
                <li>Chopped fresh flat-leaf parsley for garnish (optional)</li>
              </ul>
              <p><em>Directions:</em></p>
              <ul>
                <li class="recipe__step"><strong>Step 1:</strong> Preheat oven to 400°F. Heat oil in a large nonstick
                  skillet over medium heat. Add beef; cook, stirring often and using the back of a spoon to break it up,
                  until cooked through and no longer pink, about 5 minutes. Add onion, bell peppers, garlic, paprika,
                  oregano, salt, and pepper; cook, stirring often, until the vegetables are tender, about 8 minutes.
                  Increase heat to medium-high and stir in tomato paste; cook, stirring constantly, until the paste
                  darkens in color, about 1 minute. Remove from heat. Stir in drained tomatoes, rice, and broth.</li>
                <li class="recipe__step"><strong>Step 2:</strong> Transfer the mixture to a 9-by-13-inch baking dish;
                  cover with foil. Bake until the rice is tender and the flavors meld, about 20 minutes. Uncover and
                  sprinkle evenly with cheese. Bake, uncovered, until the cheese is melted and beginning to bubble,
                  about 10 minutes. Garnish with parsley, if desired.</li>
              </ul>
            </div>
          </div>
        </div>
      </li>

      <!-- Recipe 3: Fig & Berry Plate -->
      <li class="cards_item">
        <div id="card" class="card">
          <div class="card_image"><img id="food-image3"
            src="images/food3.webp"
            alt="A side view of a plate of figs and berries."></div>
          <div class="card_content">
            <h2 id="titlu3" class="card_title">Fig & Berry Plate • 3hrs 10mins</h2>
            <div class="card_text">
              <p id="servings3">Servings: 32</p>
              <p><em>Ingredients:</em></p>
              <ul id="list3">
                <li>3 cups whole-milk plain Greek yogurt</li>
                <li>1/4 cup pure maple syrup or honey</li>
                <li>1 teaspoon vanilla extract</li>
                <li>1/4 cup mini chocolate chips</li>
              </ul>
              <p><em>Directions:</em></p>
              <ul>
                <li class="recipe__step"><strong>Step 1:</strong> Line a large rimmed baking sheet with parchment paper.
                </li>
                <li class="recipe__step"><strong>Step 2:</strong> Stir yogurt, maple syrup (or honey), and vanilla in a
                  medium bowl. Spread on the prepared baking sheet into a 10-by-15-inch rectangle. Scatter the
                  strawberries on top and sprinkle with chocolate chips.</li>
                <li class="recipe__step"><strong>Step 3:</strong> Freeze until very firm, at least 3 hours. To serve,
                  cut or break into 32 pieces.</li>
              </ul>
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