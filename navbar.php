<?php
session_start();
?>
<!--CSS Stylesheets-->
<link rel="stylesheet" href="styles/navbarStyles.css">

<script src="https://kit.fontawesome.com/f9e06076a8.js" crossorigin="anonymous"></script>

<nav class="nav">
    <a class="nav__logo" href="#"><img src="images/black_transparent.png" alt="Logo" width="300" height="35"></a>
    <div class="nav__content">
        <ul class="nav__links">
            <li class="nav__item"><a class="nav__link" href="index.php">Home</a></li>
            <li class="nav__item"><a class="nav__link" href="index.php#memberships">Memberships</a></li>
            <li class="nav__item"><a class="nav__link" href="food-articles.php">Healthy Eating</a></li>
            <li class="nav__item"><a class="nav__link" href="articles.php">Articles</a></li>
            <li class="nav__item"><a class="nav__link" href="trainers.php">Trainers</a></li>
        </ul>

        <?php

        if (isset($_SESSION['email'])) {
            ?>

            <div class="dropdown-menu">
                <i class="fa-regular fa-user dropbtn"></i>
                <div class="dropdown-content">
                    <p>Hello, <?php echo $_SESSION['first-name']; ?></p>
                    <a href="logout.php">Logout</a>
                    <a href="myProfile.php">My profile</a>
                </div>
            </div>
        <?php
        } else {
            ?>
            <div class="btn__outlined__wrapper">
                <button class="btn__outlined" onclick="location.href='logIn.php'">Sign up/Log
                    in</button>
            </div>
        <?php } ?>


        <button class="nav__toggler"><img src="images/burger-menu-svgrepo-com.svg" alt="Menu" width="35px"
                height="35px"></img></button>
        <button class="nav__toggler"><img src="images/burger-menu-svgrepo-com.svg" alt="Menu" width="35px"
                height="35px"></img></button>
    </div>
</nav>