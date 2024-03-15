<?php
include 'file_operations.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["text-input"];
    $password = $_POST["password"];

    if (checkCredentials($username, $password)) {
        header("Location: budget.html");
        exit();
    } else {
        header("Location: login.html?error=1");
        exit();
    }
}

function checkCredentials($username, $password) {
    global $file;
    if (file_exists($file)) {
        $lines = file($file);
        foreach ($lines as $line) {
            $fields = explode(",", $line);
            if ($fields[0] === $username && rtrim($fields[1]) === $password) {
                return true;
            }
        }
    }
    return false;
}
?>