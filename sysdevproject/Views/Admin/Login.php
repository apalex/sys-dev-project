<?php
$path = dirname($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href=<?=$path."/CSS/admin.css"?>>
</head>
<body>

<div class="hexagon-container">
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
    </div>

    <div id="notification" class="notification"></div>
    
    <div class="login-container">
        <h2>ADMIN LOGIN</h2>

        <form action=<?=$path."/admin/login"?> method="POST">
            <label for="username"></label>
            <input type="text" id="username" name="username" placeholder="Username" required>
            
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            
            <input class="login-btn" type="submit" value="Login">
        </form>
    </div>

    <script src="../public/script.js"></script>
</body>
</html>
