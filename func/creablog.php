<?php 
include_once '../php/data/connection.php';
session_start();

if (isset($_POST['create'])) {
    $title=$_POST['title'];
$blog=$_POST['blog'];
$mood=$_POST['mood'];
$music=$_POST['music'];

$query=$db->prepare('INSERT INTO blog (title, blog, mood, music) VALUES (:title, :blog, :mood, :music)');
$query->bindParam('title', $title, PDO::PARAM_STR);
$query->bindParam('blog', $blog, PDO::PARAM_STR);
$query->bindParam('mood', $mood, PDO::PARAM_STR);
$query->bindParam('music', $music, PDO::PARAM_STR);
$result=$query->execute();

if ($result) {
    echo "blog creado";
}else{
    echo "error en la creacion";
}
}


 ?>