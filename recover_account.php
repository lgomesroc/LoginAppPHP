<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Conta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Recuperar Conta</h2>
        <form method="POST" action="#">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>

            <label for="confirm_new_password">Confirm New Password:</label>
            <input type="password" id="confirm_new_password" name="confirm_new_password" required>

            <div class="button-container">
                <button type="submit">Criar</button>
                <button type="button" onclick="goToLogin()">Cancelar</button>
            </div>
        </form>

        <p>Não tem uma conta? <a href="create_account.php">Criar Conta</a></p>
    </div>

    <script>
        function goToLogin() {
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>
