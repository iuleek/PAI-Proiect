<?php
session_start();
session_unset();
session_destroy();
header("Location: logIn.php"); // Redirect to login page or home page
exit();
