<?php 

require_once 'Models/User.php';


$user = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$message=$user->register($username, $email, $password);
	echo "<script>alert('$message');</script>";
}

?>

<?php require_once 'layout/header.php'; ?>

<?php include_once 'Layout/navbar.php'; ?>

    <h1>Registro</h1>
    <form method="POST">
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Registrar</button>
    </form>
    <a href="/login">¿Ya tienes cuenta? Inicia sesión</a>
