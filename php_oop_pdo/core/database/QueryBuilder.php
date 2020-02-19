<?php

/**
 * 
 */
class QueryBuilder
{
	protected $pdo;
	public $table = "users";

	

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ); // getting objects
	}

	public function insert()
	{
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$sql = "INSERT INTO {$this->table }(name, phone, email, address) VALUES (:name, :phone, :email, :address)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(":name",$name);
		$stmt->bindParam(":phone",$phone);
		$stmt->bindParam(":email",$email);
		$stmt->bindParam(":address",$address);
		$stmt->execute();
		header("location:users");
	}
}