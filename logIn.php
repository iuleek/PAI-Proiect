<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>The Health Makeover Log In</title>
    <!--CSS Stylesheets-->
    <link rel="stylesheet" href="styles/logInStyles.css">

</head>

<body>
<?php include 'navbar.php'; ?>

<?php
//session_start();
//session_start();
header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies

$con = mysqli_connect("localhost", "root", "", "pai-proiect-db", "3308");
mysqli_select_db($con, 'pai-proiect-db');

if (!$con) {
    echo "Connection Failed";
    exit();
}

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location: logIn.php?error=Email is required");
        exit();
    } else if (empty($password)) {
        header("Location: logIn.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['email'] === $email && $row['password'] === $password) {
            echo "Logged In";
            $_SESSION['email'] = $row['email'];
            $_SESSION['first-name'] = $row['first-name'];
            $_SESSION['last-name'] = $row['last-name'];
            $_SESSION['membership'] = $row['membership'];
            header("Location: index.php");
            exit();
        } else {
            header("Location: logIn.php?error=Incorrect Email or Password");
            exit();
        }
    } else {
        header("Location: logIn.php?error=Incorrect Email or Password");
        exit();
    }
}
?>

    <div class="container-logIn">
        <div class="logIn__section">
            <form class="logIn__form" action="" method="post">
                <h2>Log in to stay updated!</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label for="email">Email: </label>
                <input type="email" id="email" name="email">
                <label for="password">Password: </label>
                <input type="password" name="password"  id="password" minlength="5">
                <a class="forgotpassword">Forgot password?</a>

                <div class="logIn_btns">
                    <div class="logIn-btn__container">
                        <button class="logIn-btn" type="submit" onclick="location.href='myProfile.html'">Log in</button>
                    </div>
            </form>
        </div>
        <div class="signUp__container">
            <p class="signUp__message">Don't have an account yet?</p>
            <div class="signUp-btn__container">
                <button class="signUp-btn" onclick="location.href='signUp.php'">Press here to sign
                    up!</button>
            </div>
        </div>
    </div>
    </div>

    <?php include 'footer.php'; ?>

</body>



</html>