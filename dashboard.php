<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard, <?php echo $_SESSION['username']; ?>!</h1>
    <p><a href="share_recipe.php">Share Recipe</a> | <a href="view_recipes.php">View Recipes</a></p>
</body>
</html>
