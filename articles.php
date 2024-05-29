<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;600&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!--CSS Stylesheets-->
    <link rel="stylesheet" href="styles/articlesStyles.css">
    <title>The Health Makeover</title>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <h2>We encourage you to read our latest articles</h2>

    <?php
    $con = mysqli_connect("localhost", "root", "", "pai-proiect-db", "3308");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($con, 'pai-proiect-db');
    $rez = mysqli_query($con, 'SELECT * FROM articles');
    $index = 0;
    while ($inreg = mysqli_fetch_object($rez)) {
        if ($index % 4 === 0) {
            echo "<div class='latest-articles__row'>";
        }
        echo "<div class='latest-articles__post'>";

        echo "<div class='latest-articles__post__top'>";
        echo "<img src='" . $inreg->{"image-src"} . "' alt='Article Image' class='latest-articles__post__img'>";
        echo "</div>";

        echo "<div class='latest-articles__post__bottom'>";

        echo "<div class='latest-articles__post__text'>";

        echo "<h4 class='latest-articles__post_title'>" . $inreg->title . "</h4>";
        echo "<p class='latest-articles__post_description'><strong>Author:</strong> " . $inreg->author . "</p>";
        echo "<p><strong>Summary:</strong> " . $inreg->summary . "</p>";
        echo "</div>";
        echo "<button onclick='location.href=\"fullArticlePage.php?id=" . $inreg->id . "\"' class='latest-articles__post__btn'> 
                <img src='images/arrow-right.svg' alt='Arrow Image' width='30px' height='30px'> </button>";
        echo "</div>";

        echo "</div>";


        if ($index % 4 === 3) {
            echo "</div>";
        }
        $index++;
    }
    mysqli_close($con);
    ?>

    <?php include 'footer.php'; ?>

</body>

</html>