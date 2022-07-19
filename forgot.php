<?php require_once "functions.php";?>
<?php
    if (isset($_POST['forgot_password'])) {
        $email = $_POST['email'];
        // $user_password = $_POST['user_password'];
        $sql = "SELECT * FROM `users` WHERE email='$email'";
        $results =  $db->query($sql);
        if ($results->num_rows > 0) {
            // echo "user found";
            echo "<p>מייל לשחזור סיסמה</p>";
            $restore_url = create_restore_password_link($email);
            echo "<a href='$restore_url'>לחץ כאן לאיפוס סיסמה</a>";
        } else {
            //echo $conn->error;
            echo "user not found";
        }
    }
?>
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

<form method="post">
            <label for="email">כתובת המייל שלך</label>
            <input id="email" name="email" type="email"/>
            <input type="submit" name="forgot_password" value="בקש קישור לאיפוס סיסמא"/>
    </form>
</body>
</html>