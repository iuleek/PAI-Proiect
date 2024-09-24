

var idx = 0, page = 0;;
var x;
var recipes = [
    {
        "image": "images/food1.webp",
        "title": "Fiber-Packed Spicy White Bean & Spinach Salad • 10mins",
        "servings": "Servings: 4",
        "ingredients": [
            "2 (15-ounce) cans no-salt-added cannellini beans, rinsed",
            "1/3 cup whole-milk plain yogurt",
            "3/4 teaspoon ras el hanout",
            "1/2 teaspoon refrigerated garlic paste",
            "1/2 teaspoon salt",
            "1/2 teaspoon honey",
            "2 tablespoons extra-virgin olive oil",
            "1 tablespoon red-wine vinegar",
            "1 tablespoon harissa paste",
            "1 (5 ounce) package baby spinach",
            "1 cup julienned carrots",
            "1/4 cup unsalted roasted almonds, chopped",
            "3 tablespoons golden raisins"
        ],
        "directions": [
            "Step 1: Combine beans, yogurt, ras el hanout, garlic paste, salt, and honey in a medium bowl; stir to incorporate, coarsely mashing beans if desired.",
            "Step 2: Whisk oil, vinegar, and harissa together in a large bowl. Add spinach, carrots, almonds, and raisins; toss to coat. Serve the spinach mixture with the bean salad."
        ]
    },
    {
        "image": "images/food2.webp",
        "title": "Stuffed Pepper Casserole • 55mins",
        "servings": "Servings: 6",
        "ingredients": [
            "2 tablespoons extra-virgin olive oil",
            "1 pound 90%-lean ground beef",
            "1 large red onion, thinly sliced",
            "3 medium multicolored bell peppers, thinly sliced",
            "6 cloves garlic, chopped",
            "2 teaspoons smoked paprika",
            "2 teaspoons dried oregano",
            "1 teaspoon salt",
            "3/4 teaspoon ground pepper",
            "2 tablespoons tomato paste",
            "1 (14.5 ounce) can no-salt-added fire-roasted diced tomatoes, drained",
            "1 (8.8-ounce) package cooked brown rice",
            "1/2 cup unsalted beef broth",
            "1 cup shredded low-moisture part-skim mozzarella cheese",
            "Chopped fresh flat-leaf parsley for garnish (optional)"
        ],
        "directions": [
            "Step 1: Preheat oven to 400�F. Heat oil in a large nonstick skillet over medium heat. Add beef; cook, stirring often and using the back of a spoon to break it up, until cooked through and no longer pink, about 5 minutes. Add onion, bell peppers, garlic, paprika, oregano, salt, and pepper; cook, stirring often, until the vegetables are tender, about 8 minutes. Increase heat to medium-high and stir in tomato paste; cook, stirring constantly, until the paste darkens in color, about 1 minute. Remove from heat. Stir in drained tomatoes, rice, and broth.",
            "Step 2: Transfer the mixture to a 9-by-13-inch baking dish; cover with foil. Bake until the rice is tender and the flavors meld, about 20 minutes. Uncover and sprinkle evenly with cheese. Bake, uncovered, until the cheese is melted and beginning to bubble, about 10 minutes. Garnish with parsley, if desired."
        ]
    },
    {
        "image": "images/food3.webp",
        "title": "Fig & Berry Plate 3hrs • 10mins",
        "servings": "Servings: 32",
        "ingredients": [
            "3 cups whole-milk plain Greek yogurt",
            "1/4 cup pure maple syrup or honey",
            "1 teaspoon vanilla extract",
            "1/4 cup mini chocolate chips",
            "1 cup sliced strawberries",
            "1 cup fresh blueberries",
            "1/2 cup chopped figs"
        ],
        "directions": [
            "Step 1: Line a large rimmed baking sheet with parchment paper.",
            "Step 2: Stir yogurt, maple syrup (or honey), and vanilla in a medium bowl. Spread on the prepared baking sheet into a 10-by-15-inch rectangle. Scatter the strawberries, blueberries, and figs on top and sprinkle with chocolate chips.",
            "Step 3: Freeze until very firm, at least 3 hours. To serve, cut or break into 32 pieces."
        ]
    },
    {
        "image": "images/food4.webp",
        "title": "Chickpea & Potato Hash 25mins",
        "servings": "Servings: 4",
        "ingredients": [
            "2 tablespoons olive oil",
            "1 large potato, diced",
            "1 can chickpeas, drained and rinsed",
            "1 small onion, diced",
            "1 bell pepper, diced",
            "2 cloves garlic, minced",
            "1 teaspoon smoked paprika",
            "Salt and pepper to taste",
            "2 tablespoons chopped fresh parsley"
        ],
        "directions": [
            "Step 1: Heat olive oil in a large skillet over medium heat. Add the diced potato and cook until slightly tender, about 10 minutes.",
            "Step 2: Add the chickpeas, onion, bell pepper, and garlic to the skillet. Cook, stirring frequently, until the vegetables are tender, about 10 minutes.",
            "Step 3: Stir in the smoked paprika, salt, and pepper. Cook for another 5 minutes, until everything is well combined and heated through. Garnish with fresh parsley before serving."
        ]
    },
    {
        "image": "images/food5.webp",
        "title": "Anti-Inflammatory Lemon-Blueberry Smoothie • 5mins",
        "servings": "Servings: 1",
        "ingredients": [
            "1 cup unsweetened almond milk",
            "1/2 cup frozen blueberries",
            "1/2 frozen banana",
            "1 tablespoon chia seeds",
            "1 tablespoon lemon juice",
            "1 teaspoon grated ginger",
            "1 teaspoon turmeric",
            "Honey to taste (optional)"
        ],
        "directions": [
            "Step 1: Combine all ingredients in a blender.",
            "Step 2: Blend until smooth.",
            "Step 3: Pour into a glass and serve immediately."
        ]
    },
    {
        "image": "images/food6.webp",
        "title": "Chicken & Spinach Salad with Creamy Feta Dressing • 20mins",
        "servings": "Servings: 4",
        "ingredients": [
            "2 cups cooked chicken breast, shredded",
            "4 cups baby spinach",
            "1 cup cherry tomatoes, halved",
            "1/2 red onion, thinly sliced",
            "1/2 cup crumbled feta cheese",
            "1/4 cup plain Greek yogurt",
            "2 tablespoons olive oil",
            "1 tablespoon lemon juice",
            "1 clove garlic, minced",
            "Salt and pepper to taste"
        ],
        "directions": [
            "Step 1: In a large bowl, combine the chicken, spinach, cherry tomatoes, and red onion.",
            "Step 2: In a small bowl, whisk together the feta cheese, Greek yogurt, olive oil, lemon juice, garlic, salt, and pepper until smooth.",
            "Step 3: Pour the dressing over the salad and toss to coat. Serve immediately."
        ]
    },
    {
        "image": "images/food7.webp",
        "title": "Cabbage Salad with Lemon-Garlic Vinaigrette • 10mins",
        "servings": "Servings: 6",
        "ingredients": [
            "1 small head of cabbage, thinly sliced",
            "2 carrots, grated",
            "1/4 cup chopped fresh parsley",
            "1/4 cup olive oil",
            "2 tablespoons lemon juice",
            "1 clove garlic, minced",
            "Salt and pepper to taste"
        ],
        "directions": [
            "Step 1: In a large bowl, combine the cabbage, carrots, and parsley.",
            "Step 2: In a small bowl, whisk together the olive oil, lemon juice, garlic, salt, and pepper.",
            "Step 3: Pour the vinaigrette over the cabbage mixture and toss to coat. Serve immediately."
        ]
    }, {
        "image": "images/food8.webp",
        "title": "Pistachio-Crusted Halibut • 10mins",
        "servings": "Servings: 4",
        "ingredients": [
            "4 halibut fillets",
            "1/2 cup shelled pistachios, finely chopped",
            "2 tablespoons panko breadcrumbs",
            "2 tablespoons Dijon mustard",
            "Salt and pepper to taste",
            "1 tablespoon olive oil"
        ],
        "directions": [
            "Step 1: Preheat the oven to 400�F (200�C).",
            "Step 2: Season the halibut fillets with salt and pepper.",
            "Step 3: In a small bowl, combine the chopped pistachios and panko breadcrumbs.",
            "Step 4: Spread a thin layer of Dijon mustard over the top of each halibut fillet, then press the pistachio mixture onto the mustard-coated side.",
            "Step 5: Heat olive oil in an oven-safe skillet over medium-high heat. Add the halibut, crust-side down, and cook for 2-3 minutes, until the crust is golden brown.",
            "Step 6: Transfer the skillet to the preheated oven and bake for 5-7 minutes, until the fish is cooked through. Serve immediately."
        ]
    },
    {
        "image": "images/food9.webp",
        "title": "Cherry, Wild Rice & Quinoa Salad • 30mins",
        "servings": "Servings: 1",
        "ingredients": [
            "1 cup cooked wild rice",
            "1 cup cooked quinoa",
            "1 cup fresh cherries, pitted and halved",
            "1/2 cup chopped pecans",
            "1/4 cup chopped fresh mint",
            "1/4 cup olive oil",
            "2 tablespoons balsamic vinegar",
            "Salt and pepper to taste"
        ],
        "directions": [
            "Step 1: In a large bowl, combine the cooked wild rice, cooked quinoa, cherries, pecans, and mint.",
            "Step 2: In a small bowl, whisk together the olive oil, balsamic vinegar, salt, and pepper.",
            "Step 3: Pour the dressing over the salad and toss to coat. Serve immediately or refrigerate until ready to serve."
        ]
    }
];


ingredients = ["2 (15-ounce) cans no-salt-added cannellini beans, rinsed", "1/3 cup whole-milk plain yogurt"]

function updateContent() {
    document.getElementById("food-image1").src = recipes[idx].image;
    document.getElementById("food-image2").src = recipes[idx + 1].image;
    document.getElementById("food-image3").src = recipes[idx + 2].image;
    
    document.getElementById("titlu1").innerHTML = recipes[idx].title;
    document.getElementById("titlu2").innerHTML = recipes[idx + 1].title;
    document.getElementById("titlu3").innerHTML = recipes[idx + 2].title;
    
    document.getElementById("servings1").innerHTML = recipes[idx].servings;
    document.getElementById("servings2").innerHTML = recipes[idx + 1].servings;
    document.getElementById("servings3").innerHTML = recipes[idx + 2].servings;

    document.getElementById("list1").innerHTML = recipes[idx].ingredients.map(item => `<li>${item}</li>`).join('');
    document.getElementById("list2").innerHTML = recipes[idx + 1].ingredients.map(item => `<li>${item}</li>`).join('');
    document.getElementById("list3").innerHTML = recipes[idx + 2].ingredients.map(item => `<li>${item}</li>`).join('');

    document.getElementById("directions1").innerHTML = recipes[idx].directions.map(step => `<li>${step}</li>`).join('');
    document.getElementById("directions2").innerHTML = recipes[idx + 1].directions.map(step => `<li>${step}</li>`).join('');
    document.getElementById("directions3").innerHTML = recipes[idx + 2].directions.map(step => `<li>${step}</li>`).join('');

    document.getElementById("pa").innerHTML = (page + 1) + " / " + (recipes.length / 3);
}

function next() {
    page = (page + 1) % (recipes.length / 3);
    idx = (page * 3) % recipes.length;
    updateContent();
}

function prev() {
    page = (page - 1 + (recipes.length / 3)) % (recipes.length / 3);
    idx = (page * 3) % recipes.length;
    updateContent();
}

updateContent();
