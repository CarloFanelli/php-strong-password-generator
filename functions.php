<?php
$password_length = $_GET['password_length'];
//var_dump($password_length);

function generatePsw(int $length)
{

    $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"$%&/()?^*#-_'; /* lenght 76 */

    $password_generate = '';
    for ($i = 0; $i < $length; $i++) {
        $password_generate .= substr($characters, rand(0, (strlen($characters))), 1);
    };

    return $password_generate;
}
