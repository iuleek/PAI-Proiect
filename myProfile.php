
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

    <script src="https://kit.fontawesome.com/f9e06076a8.js" crossorigin="anonymous"></script>

    <!--CSS Stylesheets-->
    <link rel="stylesheet" href="styles/myProfileStyles.css">
    <title>The Health Makeover</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <?php
    $con = mysqli_connect("localhost", "root", "", "pai-proiect-db", "3308");
    mysqli_select_db($con, 'pai-proiect-db');

    if (!$con) {
        echo "Connection Failed";
        exit();
    }
    ?>


    <div class="myProfile_container">
        <div class="myProfile__left">
            <img class="myProfile__left__img" src="images/profile.jpg" alt="Profile">
        </div>
        <div class="myProfile__right">
            <h1>Hello, <?php echo $_SESSION['first-name']; ?> <?php echo $_SESSION['last-name']; ?></h1>
            <h3>Active membership: <?php echo $_SESSION['membership']; ?></h3>
            
            <?php 
            if (!empty($_SESSION['membership'])) {
            ?>
            <p>Here are your exclusive workout videos: </p>
            <div class="myProfile_standard_videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Prl5NeXTDkk?si=1xr7pZjBhjloMRrv"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/n_cIBBDb9JA?si=vd8e8wN1dczEHgLV"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Epit6DSq_ww?si=H1IZf3PtArnbUUH3"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9FBIaqr7TjQ?si=FxZoBe0xo8uX7tWy"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <?php } ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>