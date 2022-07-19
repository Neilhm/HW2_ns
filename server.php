<!-- 
****
 this file handles all the server-side handling (log-in, register, Remember me etc..)
****
 -->
<?php 
include_once ("db.php");
?>

<?php
$currIngredient= '';
$curr='';
$currM='';
$updateI = false;
$sortd = "SELECT * FROM RecipeData ORDER BY dateT DESC";
$sortq = mysqli_query($db,$sortd);
 $RecipeSql ="SELECT * FROM RecipeData"; 
 $RecipeQuery = mysqli_query($db, $RecipeSql);

// if(isset($_POST["add_ingredient"])){

    
//     $recipe = $_POST["title"];
//     $ingredient = $_POST["Ingredient"];
//     $sqlIng= "INSERT INTO ingredients(recipe, ingredient) VALUES('$recipe', '$ingredient')";
//     mysqli_query($db,$sqlIng);
//     header("Location:recipes.php?info=addedRecipe ");
//     exit();
// }

 if(isset($_POST["new_recipe"])){
    $title = $_POST["title"];
    $content = $_POST["content"];
    $writtenBy = $_SESSION['username'];
    $dateT = date('Y-m-d H:i:s');
    

    $sql = "INSERT INTO RecipeData(title, dateT, writtenBy, content) VALUES('$title', '$dateT', '$writtenBy', '$content')";
    mysqli_query($db,$sql);
    header("Location: addIngredient.php?pizza=$title");
    exit();
 }
 if(isset($_POST["add_ingredient"]) && isset($_GET["pizza"])){
    $title = $_GET["pizza"];
    $Ingredient = $_POST["Ingredient"];
    
    $sql = "INSERT INTO ingredients(recipe,ingredient) VALUES ('$title','$Ingredient')";
    

    
    mysqli_query($db,$sql);
    header("Location: addIngredient.php?pizza=$title");
    exit();
 }

 if(isset($_POST["addMethod"]) && isset($_GET["pizza"])){
    $title = $_GET["pizza"];
    $method = $_POST["Method"];
    
    $sql = "INSERT INTO Methods(recipe,method) VALUES ('$title','$method')";
    

    
    mysqli_query($db,$sql);
    header("Location: addIngredient.php?pizza=$title");
    exit();
 }
 if(isset($_POST['saveBtnMethod'])){
    $method = $_POST["Method"];
    $title = $_GET["title"];

    $db-> query("INSERT INTO Methods(recipe,method) VALUES ('$title','$method')");
 }

 if(isset($_POST['saveBtnIngredient'])){
    $title = $_GET["title"];
    $Ingredient = $_POST["Ingredient"];

    $db->query("INSERT INTO ingredients(recipe,ingredient) VALUES ('$title','$Ingredient')");
 }
 if(isset($_POST['deleteBtn'])){
    $recipe = $_GET['recipe'];
    $method = $_GET['method'];
    
    $db ->query(("DELETE FROM Methods WHERE recipe='$recipe' AND method='$method'"));
  
    header("Location: view-ingredient.php?title=$recipe");

    
    
 }
 if(isset($_POST['deleteBtnIngredient'])){
    $recipe = $_GET['recipe'];
    $ingredient = $_GET['ingredient'];
    $db ->query("DELETE FROM ingredients WHERE recipe='$recipe' AND ingredient='$ingredient'");
    header("Location: view-ingredient.php?title=$recipe&curr=''&currM=''");
 }

 if(isset($_POST['EditIngredientBtn'])){
    $recipe = $_GET['Editrecipe'];
    $ingredient = $_GET['ingredient'];
    $result = $db->query("SELECT * FROM ingredients WHERE recipe='$recipe' AND ingredient='$ingredient'");
    $row = $result->fetch_array();
    $currIngredient = $row['ingredient'];
    $curr = $_GET['ingredient'];
    header("Location: view-ingredient.php?title=$recipe&curr=$currIngredient&currM=");
 }
 if(isset($_POST['saveBtnEditIngredient'])){
    $recipe = $_GET['title'];
    $olding = $_GET['curr'];
    
    $newingredient = $_POST['EditIngredient'];
    $result = $db->query("UPDATE ingredients SET ingredient='$newingredient' WHERE recipe='$recipe' AND ingredient='$olding'");
   
    
    header("Location: view-ingredient.php?title=$recipe&curr=$currIngredient&currM=");
 }

 if(isset($_POST['deleterec'])){
   $recipe = $_GET['title'];
   $result=$db->query("DELETE FROM RecipeData WHERE title='$recipe'");
   header("Location: recipes.php");
 }

 if(isset($_POST['EditMethodBtn'])){
    $recipe = $_GET['EditMethod'];
    $method = $_GET['method'];
    $result = $db->query("SELECT * FROM Methods WHERE recipe='$recipe' AND method='$method'");
    $row = $result->fetch_array();
    $currMethod = $row['method'];
    header("Location: view-ingredient.php?title=$recipe&currM=$currMethod&curr=");
 }

 if(isset($_POST['saveBtnEditMethod'])){
    $recipe = $_GET['title'];
    $oldme = $_GET['currM'];
    
    $newme = $_POST['EditMethod'];
    $result = $db->query("UPDATE Methods SET method='$newme' WHERE recipe='$recipe' AND method='$oldme'");
   
    
    header("Location: view-ingredient.php?title=$recipe&currM=$currIngredient&curr=");
 }

 
//  if(isset($_REQUEST['id']))
 // Starting the session, necessary
 // for using session variables

   
 // Declaring and hoisting the variables

  
 // Registration code
 if (isset($_POST['reg_user'])) {
   
     // Receiving the values entered and storing
     // in the variables
     // Data sanitization is done to prevent
     // SQL injections
     $username = mysqli_real_escape_string($db, $_POST['username']);
     $email = mysqli_real_escape_string($db, $_POST['email']);
     
     $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
     $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
   
     // Ensuring that the user has not left any input field blank
     // error messages will be displayed for every blank input
    
     if (empty($email)) { array_push($errors, "Email is required"); }
     if (empty($username)) { array_push($errors, "Username is required"); }
     if (empty($password_1)) { array_push($errors, "Password is required"); }
     $select = mysqli_query($db, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
    if(mysqli_num_rows($select)) {
    exit('This email already exists');
        }
     $select = mysqli_query($db, "SELECT * FROM users WHERE username = '".$_POST['username']."'");
    if(mysqli_num_rows($select)) {
    exit('This username already exists');
        }
   
     if ($password_1 != $password_2) {
         array_push($errors, "The two passwords do not match");
         // Checking if the passwords match
     }
   
     // If the form is error free, then register the user
     if (count($errors) == 0) {
          
         // Password encryption to increase data security
         $password = md5($password_1);
         
         

         // Inserting data into table
         $query = " INSERT INTO users ( username, email, password) VALUES( '$username', '$email', '$password')" ;
         if ($db->query($sql)){
            echo "account added";
        }
          
         mysqli_query($db, $query);
   
         // Storing username of the logged in user,
         // in the session variable
         $_SESSION['username'] = $username;
          
         // Welcome message
         $_SESSION['success'] = "You have logged in";
         
          
         // Page on which the user will be
         // redirected after logging in
         header('location: index.php');
     }
 }
   
 // User login
 if (isset($_POST['login_user'])) {
        
    //USED TO USE EXAMPLE USERNAME AND PASSWORD THE OTHER CODE (AFTER EXIT) IS WORKING FINE USING DATABASE
   
    if (isset($users[$_POST['username']])){
      if ($users[$_POST['username']] == $_POST['password'] ) {
          // Storing username in session variable
        $_SESSION['username'] = $_POST['username'];
              
        // Welcome message
       
            echo "<script type='text/javascript'>
            alert('You logged-in succecfuly')
            window.location.replace('index.php');
            </script>"; 
            
      
        
       
        exit;
      } }
      
     // Data sanitization to prevent SQL injection
     $username = mysqli_real_escape_string($db, $_POST['username']);
     $password = mysqli_real_escape_string($db, $_POST['password']);
   
     // Error message if the input field is left blank
     if (empty($username)) {
         array_push($errors, "Username is required");
     }
     if (empty($password)) {
         array_push($errors, "Password is required");
     }
   
     // Checking for the errors
     if (count($errors) == 0) {
          
         // Password matching
         $password = md5($password);
          
         $query = "SELECT * FROM users WHERE username=
                 '$username' AND password='$password'";
         $results = mysqli_query($db, $query);

         
         // $results = 1 means that one user with the
         // entered username exists
         if (mysqli_num_rows($results) == 1) {
              
             // Storing username in session variable
             $_SESSION['username'] = $username;
              
             // Welcome message
             echo "<script type='text/javascript'>
             alert('You logged-in succecfuly')
             window.location.replace('index.php');
             </script>"; 
              
             // Page on which the user is sent
             // to after logging in
           
         }
         else {
              
             // If the username and password doesn't match
             array_push($errors, "Username or password incorrect");
         }
     }
 }
     
     //REMEBER ME!!

if(!empty($_POST["login_user"])) {
	
	$sql = "Select * from users where username = '" . $_POST["username"] . "'";
        if(!isset($_COOKIE["member_login"])) {
            $sql .= " AND password = '" . md5($_POST["password"]) . "'";
	}
        $result = mysqli_query($db,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["member_id"] = $user["member_id"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("member_login",$_POST["username"],time()+ (7 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				}
			}
	} 
}

 

 if(isset($_GET['title'])){

    $temp= $_GET['title'];
    $sqltitle= "SELECT * FROM RecipeData WHERE title = '$temp' ";
    $result = $db->query($sqltitle);

    $sqlIngredients= "SELECT * FROM ingredients WHERE recipe = '$temp' ";
    $IngredientResult = $db ->query($sqlIngredients);
   
    $sqlMethods = "SELECT * FROM Methods WHERE recipe = '$temp'";
    $MethodResult = $db -> query($sqlMethods);
 }
   
 ?>