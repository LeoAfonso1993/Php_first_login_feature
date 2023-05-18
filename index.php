<?php
session_start();

if($_SESSION['warning']){
    echo $_SESSION['warning'];
    $_SESSION['warning'] = ' ';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="receiver.php"> <!-- Changed method to POST so the password wouldn't show up on url bar-->
        <label>Name:
        <input type="text" name="name"></input><br/><br/>
        </label>
        <label>Password
        <input type="password" name="password"></input><br/><br/>
        </label>
        <input type="submit" value="submit"></input>
    </form>
</body>
</html>