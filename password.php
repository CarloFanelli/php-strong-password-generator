<?php
include './functions.php';

session_start();

//var_dump($_SESSION['password_length']);

//$passowrd_generate = $_SESSION['password'];
//$password_length = $_SESSION['password_length'];

//echo $passowrd_generate;

if (
    isset($_GET['password_length'])
    && !empty($_GET['password_length'])
) {

    $_SESSION['password'] = generatePsw($_GET['password_length']);
    $_SESSION['password_length'] = $_GET['password_length'];
    var_dump($_SESSION['password'] . '   ' . $_GET['password_length']);
}

echo ('password lunghezza : ' . $_GET['password_length']);
echo '<br>';
echo $_SESSION['password'];

//session_destroy();