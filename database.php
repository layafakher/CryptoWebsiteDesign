<?php

$config = json_decode(file_get_contents("database_config.json"));

$conn = new mysqli($config->servername, $config->username, 
    $config->password, $config->dbname, $config->port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function d($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function createUserObject($firstName,$lastName,$phoneNumber,$email,$balance,$isAdmin,$password){
    $user = new stdClass();
    $user->firstName = $firstName;
    $user->lastName = $lastName;
    $user->phoneNumber = $phoneNumber;
    $user->email = $email;
    $user->balance = $balance;
    $user->isAdmin = $isAdmin;
    $user->password = $password;

    return $user;
}
