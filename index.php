<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login App PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="button-container">
                <button type="submit">OK</button>
                <button type="button" onclick="cancelLogin()">Cancelar</button>
            </div>
        </form>

        <p>Não tem uma conta? <a href="create_account.php">Criar Conta</a></p>
        <p>Esqueceu a senha? <a href="recover_account.php">Recuperar Conta</a></p>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
