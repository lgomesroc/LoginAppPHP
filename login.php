<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin') {
        echo 'Login bem-sucedido!';
    } else {
        echo 'Credenciais inválidas!';
    }
} else {
    header('Location: index.php');
    exit;
}
