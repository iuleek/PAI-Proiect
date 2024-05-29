

var idx = 0, page = 0;;
var x;
var pages = ["food1.webp", "food2.webp", "food3.webp", "food4.webp", "food5.webp", "food6.webp", "food7.webp", "food8.webp", "food9.webp"];
var titluri = ["Fiber-Packed Spicy White Bean & Spinach Salad • 10mins", "Stuffed Pepper Casserole • 55mins", "Fig & Berry Plate • 3hrs 10mins",
    "Chickpea & Potato Hash • 25mins", "Anti-Inflammatory Lemon-Blueberry Smoothie • 5mins", "Chicken & Spinach Salad with Creamy Feta Dressing • 20mins",
    "Cabbage Salad with Lemon-Garlic Vinaigrette • 10mins", "Pistachio-Crusted Halibut • 10mins", "Cherry, Wild Rice & Quinoa Salad • 30mins"]
servings = [4, 6, 32, 4, 1, 4, 6, 4, 1];
ingredients = ["2 (15-ounce) cans no-salt-added cannellini beans, rinsed", "1/3 cup whole-milk plain yogurt"]

function next() {
    page = page + 1;
    idx = idx + 3;
    if (idx == pages.length && page == pages.length / 3) {
        idx = 0;
        page = 0;
    }
    document.getElementById("food-image1").src = "images/" + pages[idx];
    document.getElementById("food-image2").src = "images/" + pages[idx + 1];
    document.getElementById("food-image3").src = "images/" + pages[idx + 2];
    document.getElementById("pa").innerHTML = (page + 1) + " / " + pages.length / 3;

    document.getElementById("titlu1").innerHTML = titluri[idx];
    document.getElementById("titlu2").innerHTML = titluri[idx + 1];
    document.getElementById("titlu3").innerHTML = titluri[idx + 2];

    document.getElementById("servings1").innerHTML = "Servings: " + servings[idx];
    document.getElementById("servings2").innerHTML = "Servings: " + servings[idx + 1];
    document.getElementById("servings3").innerHTML = "Servings: " + servings[idx + 2];

}

function prev() {
    page = page - 1;
    idx = idx - 3;
    if (idx < 0 && page < 0) {
        idx = pages.length - 3;
        page = pages.length / 3 - 1;
    }
    document.getElementById("food-image1").src = "images/" + pages[idx];
    document.getElementById("food-image2").src = "images/" + pages[idx + 1];
    document.getElementById("food-image3").src = "images/" + pages[idx + 2];

    document.getElementById("titlu1").innerHTML = titluri[idx];
    document.getElementById("titlu2").innerHTML = titluri[idx + 1];
    document.getElementById("titlu3").innerHTML = titluri[idx + 2];


    document.getElementById("servings1").innerHTML = "Servings: " + servings[idx];
    document.getElementById("servings2").innerHTML = "Servings: " + servings[idx + 1];
    document.getElementById("servings3").innerHTML = "Servings: " + servings[idx + 2];

    document.getElementById("pa").innerHTML = (page + 1) + " / " + pages.length / 3;
} 