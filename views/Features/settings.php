<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
} else {
    // Show users the page!
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Configuraciones</title>
</head>
<body>
	<h1>Configuraciones de cuenta</h1>
	<form action="../../func/settings.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="">
		<label>Usuario</label>
		<input type="text" name="user">
		<br>
		<label>Correo</label>
		<input type="text" name="email">
		<br>
		<label>Biografia</label>
		<textarea name="bio"></textarea>
		<br>
		<label>Fecha de nacimiento</label>
		<input type="date" name="dob">
		<br>
		<button type="submit" name="confirm">Confirmar</button>
	</form>
</body>
</html>
