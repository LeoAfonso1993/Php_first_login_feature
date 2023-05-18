<?php
if($_COOKIE['name'] && $_COOKIE['password']){
    $_COOKIE['name'] = '';
    $_COOKIE['password'] = '';
    header('Location: index.php');
}

?>