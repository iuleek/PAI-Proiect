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
    <link rel="stylesheet" href="styles/fullArticlePageStyles.css">
    <title>The Health Makeover</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php
    $con = mysqli_connect("localhost", "root", "", "pai-proiect-db", "3308");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $articleId = $_GET['id'];
    $query = "SELECT * FROM articles WHERE id = $articleId";
    $result = mysqli_query($con, $query);

    if ($article = mysqli_fetch_object($result)) {
        $imageSrc = htmlspecialchars($article->{"image-src"});

        echo "<div class='container' style='background-image: url($imageSrc); background-size: cover; background-position: center;'>";
        echo "<div class='article'>";
        echo "<div class='article__top'>";
        echo "<h1 class='article__title'>" . $article->title . "</h1>";
        echo "<h3 class='article__author'>" . $article->author . "</h1>";
        echo "</div>";

        echo "<div class='article__bottom'>";

        $subsection_titles = json_decode($article->{"subsection-titles"}, true);
        $subsection_content = json_decode($article->{"subsection-content"}, true);

        for ($i = 0; $i < count($subsection_titles); $i++) {
            echo "<div class='article__subsection'>";
            echo "<h4 class='article__subsection__title'>" . $subsection_titles[$i] . "</h4>";
            echo "<p class='article__subsection__content'>" . $subsection_content[$i] . "</p>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";

    } else {
        echo "Article not found.";
    }

    mysqli_close($con);
    ?>



    <?php include 'footer.php'; ?>
</body>

</html>