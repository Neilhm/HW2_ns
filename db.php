
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

$RecipiesSql = "CREATE TABLE IF NOT EXISTS RecipeData(


title varchar(255) NOT NULL PRIMARY KEY,
dateT date NOT NULL,
writtenBy varchar(255) NOT NULL,
content varchar(255) NOT NULL

)";
 if ($db->query($RecipiesSql) === TRUE) {

    
} else {

echo "Error creating table: " . $db->error;
}

$ingredientsSql = "CREATE TABLE IF NOT EXISTS ingredients (
    
recipe varchar(255) REFERENCES RecipeData(title),
    ingredient varchar(255) not null,
    PRIMARY KEY(recipe,ingredient)
    
)";

if ($db->query($ingredientsSql) === TRUE) {

    
} else {

echo "Error creating table: " . $db->error;

}

$MethodSql = "CREATE TABLE IF NOT EXISTS Methods (
    
    recipe varchar(255) REFERENCES RecipeData(title),
        method varchar(255) not null,
        PRIMARY KEY(recipe,method)
        
    )";
    
    if ($db->query($MethodSql) === TRUE) {
    
        
    } else {
    
    echo "Error creating table: " . $db->error;
    
    }
  
?>