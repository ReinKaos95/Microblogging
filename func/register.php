
<?php 

include_once '../php/data/connection.php';
session_start();

if (isset($_POST['register'])) {

	$user=$_POST['user'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$hashing=password_hash($password, PASSWORD_BCRYPT);
	$bio=$_POST['bio'];
	$dob=$_POST['dob'];
	$pfp= addslashes(file_get_contents($_FILES['pfp']['tmp_name']));

	$query=$db->prepare('SELECT * FROM users WHERE EMAIL=:email');
	$query->bindParam("email", $email, PDO::PARAM_STR);
	$query->execute();

	$query=$db->prepare('SELECT * FROM users WHERE USER=:user');
	$query->bindParam("user", $user, PDO::PARAM_STR);
	$query->execute();

    if ($query->rowCount() > 0) {
    	echo '<h1>Zona muerta!</h1>';
        echo '<p>The email address is already registered!</p>';
    }

	if ($query->rowCount() == 0) {
		$query=$db->prepare('INSERT INTO users (user, email, passwrd, bio, dob, pfp) VALUES (:user, :email, :hashing, :bio, :dob, :pfp)');
		$query->bindParam('user', $user, PDO::PARAM_STR);
		$query->bindParam('email', $email, PDO::PARAM_STR);
		$query->bindParam('hashing', $hashing, PDO::PARAM_STR);
		$query->bindParam('bio', $bio, PDO::PARAM_STR);
		$query->bindParam('dob', $dob, PDO::PARAM_STR);
		$query->bindParam('pfp', $pfp, PDO::PARAM_STR);
		$results=$query->execute();
		        if ($results) {
            echo 'Your registration was successful!';
            echo "<br><a href='../index.html'>Accede aca para registrarte</a>";
        } else {
            echo 'Something went wrong!';
        }
	}
}

 ?>