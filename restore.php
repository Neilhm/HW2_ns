<?php require_once "functions.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>שחזור סיסמא של משתשמש</title>
    <style>
        body {
            direction:rtl;
        }
    </style>
</head>
<body>
<?php
        $user_email = $_GET["secret"]; //fix this line
        $sql = "SELECT * FROM `users` WHERE email='$email'"; //fix this line
        $results =  $db->query($sql);
        if ($results->num_rows < 0) {
            die("קוד משתמש לא נכון");
        }

        if(isset($_POST['restore_password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password = md5($password);
            $sql = "UPDATE `users` SET `password`='$password' WHERE email = '$email'";
            $results =  $db->query($sql);
            if ($results) {
                echo "הסיסמא אופסה בהצלחה";
            } else {
                echo "איפוס סיסמא נכשל";
                echo $conn->error;
            }
        } 
    ?>
<form method="post">
            <label for="email">כתובת המייל שלך</label>
            <input id="email" name="email" type="email"/>
            <label for="password">הסיסמא החדשה שלך</label>
            <input id="password" name="password" type="password"/>
            <input type="submit" name="restore_password" value="איפוס סיסמא"/>
    </form>
</body>
</html>