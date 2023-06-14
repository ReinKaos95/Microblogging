<?php 

include_once '../php/data/connection.php';

session_start();

if (isset($_POST['login'])) {
 
    $user = $_POST['user'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
 
    $query = $db->prepare("SELECT * FROM users WHERE USER=:user");
    $query->bindParam("user", $user, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_hash($password, PASSWORD_BCRYPT)) {
            $_SESSION['user_id'] = $result['id'];
            echo "Loggeo exitoso";
            echo '<br><p>Congratulations, you are logged in!</p>';
            echo "<a href='../php/views/main.php'>Accede a tu perfil</a>";
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
?>