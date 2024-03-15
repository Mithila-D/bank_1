<?php
include 'file_operations.php';
$file = "login_dets";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
 
    $newPassword = generateRandomPassword();
 
    changePassword($username, $newPassword);
    echo "Your new password is: $newPassword";
} else {

    header("Location: index.php");
    exit();
}


function generateRandomPassword($length = 8) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars), 0, $length);
}
?>
