<?php require_once "db.php";?>
<?php
function create_restore_password_link($email){
    // echo "http://localhost/folderFile/restore.php?secret=$user_email";
    // return "http://localhost/tirugl_12_forget_password/restore.php?secret=$user_email";

    return "http://localhost/hw3/restore.php?secret=$email";

}