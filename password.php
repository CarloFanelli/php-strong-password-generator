<?php
session_start();

var_dump($_SESSION['password_lenght']);
var_dump($_SESSION['password']);

$passowrd_generate = $_SESSION['password'];
echo $passowrd_generate;

session_destroy();
