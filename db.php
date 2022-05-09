
<?php
session_start();
 $username = "";
 $email    = "";
 $errors = array();
 $_SESSION['success'] = "";
 $dbName = "registration";
   
 // DBMS connection code -> hostname,
 // username, password, database name
 $db =  mysqli_connect('localhost', 'root', '');
   if ($db->connect_error){
       echo "error connecting to db";
       die();
   }

$sql = "CREATE DATABASE IF NOT EXISTS $dbName"; 

if ($db->query($sql) === TRUE) {



} else {

echo "Error creating database: " . $db->error;

}


$db = mysqli_connect('localhost', 'root', '', "$dbName");


$sql = "CREATE TABLE IF NOT EXISTS users (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL
)";
    if ($db->query($sql) === TRUE) {

    
    
    } else {
    
    echo "Error creating table: " . $db->error;
    
    }
?>