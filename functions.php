<?php

function generatePsw(int $length)
{

    $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"$%&/()?^*#-_'; /* lenght 76 */

    $password_generate = ''; /* perché devo dichiarla prima? */
    for ($i = 0; $i < $length; $i++) {
        $password_generate .= substr($characters, rand(0, (strlen($characters))), 1);
    };

    return $password_generate;
}

header('Location: ./result.php');
