<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Redireciona para a página de login se o usuário não estiver logado
    header('Location: index.php');
    exit();
}

$username = $_SESSION['username'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="styleProfile.css">
</head>
<body>
    <div class="container">
    <p class="text">Bem vindo, <?php echo htmlspecialchars($username); ?>!</p>

    </div>
</body>
</html>