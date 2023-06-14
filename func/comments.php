<?php 
include_once '../php/data/connection.php';
session_start();

if (isset($_POST['comment'])) {
    $comments=$_POST['comments'];

$query=$db->prepare('INSERT INTO comments (comments) VALUES (:comments)');
$query->bindParam('comments', $comments, PDO::PARAM_STR);
$result=$query->execute();

if ($result) {
    echo "comentario creado";
   header("Locaion: ../php/views/profile.php");
}else{
    echo "error en la creacion";
}
}
 ?>
