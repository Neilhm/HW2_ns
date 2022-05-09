<?php
require_once "db.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_Post['password'];

$sql =" INSERT INTO 'users' ('id', 'username', 'email', 'password')
VALUES (NULL, '$username', '$email', '$password')" ;
if ($conn->query($sql)){
    echo "account added";
}
?>
