<a href="../index.php">Delete</a>
</br>
</hr>

<?php

if($_COOKIE['name']){
    echo "Name: {$_COOKIE['name']}";
    echo '<br>';
    echo "Password: {$_COOKIE['password']}";
} else {
    echo "Fail";
}
?>