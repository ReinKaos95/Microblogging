<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tu perfil</title>
</head>
<body>
	<aside>
		<?php require '../data/connection.php';
		$query=$db->prepare('SELECT * FROM users');
		$query->execute();
		$result=$query->fetchAll(PDO::FETCH_OBJ);


		 ?>
		 <h1><?php echo $_SESSION['user']; 			
		?></h1>
		<img height="350px" src="data:image/jpg;base64" ><?php echo base64_encode($_SESSION['pfp']); 			
		?>
		
	</aside>
<form action="../../func/comments.php" method="post">
	<label>escriba su comentario</label>
<textarea name="comments"></textarea>
<button type="submit" name="comment">Comentar</button>
<?php 

$query=$db->prepare('SELECT * FROM comments');
		$query->execute();
		$result=$query->fetchAll(PDO::FETCH_OBJ);
		if ($query -> rowCount() > 0) {
			foreach ($result as $key) {
			echo "<p>".$key -> comments. " <a href='#'>Editar</a></p>";
			}
		}
		?>
</form>
</body>
</html>