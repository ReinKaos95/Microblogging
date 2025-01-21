<?php 

class Connection
{
	private $host = "localhost";
	private $dbname = "site";
	private $username = "root";
	private $password = "";
	private $pdo;
		function __construct()
	{
		try {
			$this->pdo=new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->username, $this->password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		} catch (PDOException $e) {
			echo "Error al conectar a la base de datos: " . $e->getMessage();
			exit;
		}
	}
	public function getConnect()
	{
		return $this->pdo;
	}

	public function closeConnect()
	{
		$this->pdo=null;
	}

}

 ?>