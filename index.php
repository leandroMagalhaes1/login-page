<?php
include("database.php");

$username = null;

if (isset($_POST["login"])) {
    $username = $_POST["username"];

    $sql = "SELECT User_Name FROM user WHERE User_Name = '$username'";

    if (mysqli_query($conn, $sql)) {
        if(empty($sql)){
            
        }
        // After a successful query, redirect to avoid resubmission on reload
        header('Location: profile.php');
        exit(); // Always exit after a redirect to prevent further script execution
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginPage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Background image div -->
    <div class="background"></div>

    <div class="login_data">
        <div class="login_title">
            <h1><strong>Faça o seu login</strong></h1>
        </div>

        <!-- Wrap everything inside a form -->
        <form action="index.php" method="post">

            <!-- Username field -->
            <div class="login_username">
                <label for="username_id"><strong>Username</strong></label>
                <input id="username_id" name="username" type="text" required>
            </div>
            
            <!-- Password field -->
            <div class="login_password">
                <label for="password_id"><strong>Password</strong></label>
                <input id="password_id" name="password" type="password" required>
            </div>
            
            <!-- Login button -->
            <div class="login_button">
                <button id="button_login" name="login" type="submit">Login</button>
            </div>

        </form>
        
        <!-- Registration link -->
        <div class="login_registo">
            <a class="a_cria" href="regist.php"><strong>criar conta</strong></a>
        </div>
    </div>
</body>
</html>
