<?php include_once 'views/Layouts/header.php'; ?>

<div class="container">
	<form action="#" method="post" enctype="multipart/form-data">
	<h1>Bienvenido a Micro blogging</h1>
	<br>
	<label>Usuario</label>
	<input type="text" name="user" required>
	<br>
	<label>Correo</label>
	<input type="email" name="email" required>
	<br>
	<label>Contraseña</label>
	<input type="password" name="password" required>
	<button type="submit" name="register" value="register">Register</button>
</form>

</div>