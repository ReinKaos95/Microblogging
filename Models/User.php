<?php 
require_once 'App/db.php';

class User
{
	private $db;
	private $pdo;
	
	function __construct()
	{
		$this->db=new Connection();
		$this->pdo = $this->db->getConnect();
	}

	public function register($username, $email, $password)
	{
		try {
			$stmt=$this->pdo->prepare("SELECT * FROM users WHERE email = :email");
			$stmt->execute(['email' => $email]);
			if ($stmt->rowCount() > 0) {
				return "ese usuario existe";
			}

			$stmt = $this->pdo->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
			$stmt->execute(['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT), 'email' => $email]);
			return "Usuario registrado exitosamente.";
		} catch (PDOException $e) {
			return "Error al registrar usuario: " . $e->getMessage();
		}
	}

	public function login($email, $password)
	{
		try {
			$stmt=$this->pdo->prepare("SELECT * FROM users WHERE email = :email");
			$stmt->execute(['email' => $email]);
			$user = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($user && password_verify($password, $user['password'])) {
			return "Login exitoso.";

		} else {
			return "credenciales incorrectas.";
		}
		} catch (PDOException $e) {
			return "Error al realizar el Login: " . $e->getMessage();
		}
	}


}

 ?>