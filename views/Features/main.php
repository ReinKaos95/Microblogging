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
	<title>Perfil Micro Blogging</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<header>
	<nav>
		<ul>
			<li><a href="profile.php">Perfil</a></li>
			<li><a href="blog.php">Nuevo Blog</a></li>
			<li><a href="settings.php">Configuraciones</a></li>
			<li><a href="../../func/logout.php">Salir</a></li>
		</ul>
	</nav>
</header>
<body>
<h1>Bienvenido a Micro Blogging </h1>
<h2>Usuarios registrados</h2>
<?php 
		require '../data/connection.php';
		$query=$db->prepare('SELECT * FROM users');
		$query->execute();
		$result=$query->fetchAll(PDO::FETCH_OBJ);
		if ($query -> rowCount() > 0) {
			foreach ($result as $key) {
			echo "<a href='#'>".$key -> user. "<br></a>";
			}
		}
 ?>
<h2>Blogs escritos</h2>
<?php 

		$query=$db->prepare('SELECT * FROM blog');
		$query->execute();
		$result=$query->fetchAll(PDO::FETCH_OBJ);
		if ($query -> rowCount() > 0) {
			foreach ($result as $key) {
			echo "<a href='#'>".$key -> title. "<br></a>";
			}
		}
 ?>
</body>
</html>