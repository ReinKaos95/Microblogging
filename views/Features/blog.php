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
	<title>Crear un nuevo blog</title>
</head>
<body>
<h1>Crea un blog</h1>
<form action="../../func/creablog.php" method="post">
<label>Titulo</label>
<br>
<input type="text" name="title">
<br>
<br>
<textarea name="blog"></textarea>
<br>
<label>Mood</label>
<br>
<input type="text" name="mood">
<br>
<label>Music</label>
<br>
<input type="text" name="music">
<br>
<br>
<button type="submit" name="create">Crear</button>
</form>
<a href="main.php">volver</a>
</body>
</html>