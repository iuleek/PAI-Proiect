<?php 

header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies

$con = mysqli_connect("localhost", "root", "", "pai-proiect-db", "3308");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = htmlspecialchars(trim($_POST['first-name']));
    $lastName = htmlspecialchars(trim($_POST['last-name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $phone = htmlspecialchars(trim($_POST['phone']));

    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($phone)) {
        header("Location: signUp.php?error=All fields are required");
        exit();
    } else {
        $sql = "INSERT INTO login ( `first-name`, `last-name`, `email`, `password`,`phone`) VALUES ('$firstName', '$lastName', '$email', '$password', '$phone')";
        if (mysqli_query($con, $sql)) {
            $_SESSION['email'] = $email;
            $_SESSION['first-name'] = $firstName;
            $_SESSION['last-name'] = $lastName;
            $_SESSION['phone'] = $phone;
            header("Location: logIn.php");
            exit();
        } else {
            header("Location: signUp.php?error=Failed to create account");
            exit();
        }
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>The Health Makeover Sign Up</title>
    <!--CSS Stylesheets-->
    <link rel="stylesheet" href="styles/signUpStyles.css">

</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="signUp">
        <div class="signUp__container">
            <h2 class="signUp__title">Sign up!</h2>
            <h3 class="signUp__message">Join our squad and keep the community growing!</h3>
            <form class="signUp__form" action="" method="post">
                <label for="first-name">First name:</label>
                <input type="text" id="first-name" name="first-name">
                <label for="last-name">Last name:</label>
                <input type="text" id="last-name" name="last-name">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
                <label for="phone">Phone number:</label>
                <input type="tel" id="phone" name="phone">
                <label for="password">Password: </label>
                <input type="password" id="password" name = "password" minlength="3">
                <div class="btn__outlined__wrapper signUp__btn__wrapper">
                    <button class="btn__outlined signUp__btn" type="submit">Sign Up!</button>
                </div>
            </form>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    
</body>

</html>