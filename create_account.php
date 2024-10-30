<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Criar Conta</h2>
        <form method="POST" action="#">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Create Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <div class="button-container">
                <button type="submit">OK</button>
                <button type="button" onclick="goToLogin()">Cancelar</button>
            </div>
        </form>

        <p>Esqueceu a senha? <a href="recover_account.php">Recuperar Conta</a></p>
    </div>

    <script>
        function goToLogin() {
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>
