<?php
    include("database.php");
//verificar credibilidade dos dados ao registar
//inserir na tabela dos users
    $username=null;
    $password=null;


    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
    
        // Check if passwords match
        if ($password !== $confirmPassword) {
            echo "As senhas não coincidem.";
            exit; // Stop further execution
        }
    
        // Prepare the SQL statement
        $sql = "INSERT INTO user (User_Name, User_Password) VALUES ('$username', '$password')";
    
        // Execute the query
        if (mysqli_query($conn, $sql)) {
            // Use JavaScript for both the alert and redirect
            echo "<script>
                alert('Conta criada com sucesso');
                window.location.href = 'index.php';
            </script>";
            exit();
        } else {
            echo "Erro: " . mysqli_error($conn);
            echo "<script>
                alert('Erro ao criar conta');
                window.location.href = 'regist.php';
            </script>";
            exit();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registo</title>
    <link rel="stylesheet" href="styleRegist.css">
</head>
<body>
    <div class="regist_data">
        <div class="regist_title">
            <h1><strong>Faça o seu registo</strong></h1>
        </div>

        <!-- Wrap everything inside a form -->
        <form action="regist.php" method="post">

            <!-- Username field -->
            <div class="regist_username">
                <label for="regist_username"><strong>Username</strong></label>
                <input id="regist_username" name="username" type="text" required>
            </div>
            
            <!-- Password field -->
            <div class="regist_password">
                <label for="input_password"><strong>Password</strong></label>
                <input id="input_password" name="password" type="password" required>
            </div>
            
            <!-- Confirm password field -->
            <div class="regist_confirma_password">
                <label for="input_confirma_password"><strong>C Password</strong></label>
                <div class="button_div_confirma">
                    <input id="input_confirma_password" name="confirm_password" type="password" required>
                </div>
                
            </div>

            <!-- Register button -->
            <div class="regist_cria_conta">
                <button id="button_cria_conta" name="submit" type="submit">registar Conta</button>
            </div>
        </form>
        
        <!-- Login link -->
        <div class="regist_login">
            <a class="volta_login" href="index.php"><strong>Login</strong></a>
        </div>
    </div>
</body>

</html>