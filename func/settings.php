<?php 
include_once '../php/data/connection.php';

session_start();

if (isset($_POST['confirm'])) {
	$user=$_POST['user'];
	$email=$_POST['email'];
	$bio=$_POST['bio'];
	$dob=$_POST['dob'];
	$id=$_POST['id'];


	$query=$db->prepare("SELECT * FROM users WHERE user = :id");
	$query->execute(array(':id'=>$id));
	$results=$query->fetchAll();

	$query=$db->prepare("UPDATE users SET user= :user WHERE id= :id");
	//$query->bindValue("user", $user, PDO::PARAM_STR);
	/*$query->bindParam("email", $email, PDO::PARAM_STR);
	$query->bindParam("bio", $bio, PDO::PARAM_STR);
	$query->bindParam("dob", $dob, PDO::PARAM_STR);*/
	$results=$query->execute(array(':user'=>$user, ':id'=>$id));	

	if ($results) {
		var_dump($results);
	}
	else{
		echo "error en el registro";
	}
	/**/
}
?>