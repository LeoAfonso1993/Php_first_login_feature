<?php
session_start();

$name = filter_input(INPUT_POST, 'name');//changed from get to post so the password wouldn't show up on url bar
$password = filter_input(INPUT_POST, 'password');


if($name && $password){
    $expiration = time() + 86400;
    setcookie('name', $name, $expiration);
    setcookie('password', $password, $expiration);

    header('Location: pages/dashboard.php');
} else {
    $_SESSION['warning'] = 'Missing information';
    header('Location: index.php');
}

?>