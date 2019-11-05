<?php
require_once 'KLogger.php';
class Dao {
	private $host = "us-cdbr-iron-east-05.cleardb.net";
	private $dbname = "heroku_2b651c711bccddf";
	private $user = "ba18906d824490";
	private $pass = "5195c3d0";
	private $logger;
	
	public function __construct() {
		$this->logger = new KLogger("dao_log.txt", KLogger::INFO);
	}

	public function getConnection() {
		try {
		   $pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
		} catch (Exception $e) {
		  echo print_r($e,1);
		}
		return $pdo;
	  }

	public function registerUser($username, $password) {
		//$this->logger->LogInfo("saving a comment [{$comment}]");
		$conn = $this->getConnection();
		$registerQuery = "INSERT INTO users (username, password) VALUES (:username, :password);";
		$q = $conn->prepare($registerQuery);
		$q->bindParam(":username", $username);
		$q->bindParam(":password", $password);
		$q->execute();
	}

	public function loginUser($username, $password) {
		$conn = $this->getConnection();
		$loginQuery = "SELECT * FROM users WHERE username = ? AND password = ?";
		$q = $conn->prepare($loginQuery);
		$q->execute([$username, $password]);
		$valid = $q->fetch();
		return $valid;
	}
}
?>
