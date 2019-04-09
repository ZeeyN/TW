<?php 

require_once('includes/config/config.php');


class Database{
	
//VARS==========================
	public $connection;
	public $db;
//==============================
//METHODS=======================


	function __construct(){
		$this->db = $this->open_db_connection();
		$this->query("SET NAMES utf8");
	}


	public function open_db_connection(){
		
		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		if($this->connection->connect_errno){
			die("Database connection field badly ".$this->connection->connect_error);
		}
		return $this->connection;
	}


	public function query($sql){

		$result = $this->db->query($sql);
		$this->confirm_query($result);
		return $result;
	}


	private function confirm_query($result){
		if(!$result){
			die("Query failed ".$this->db->error);
		}
	}
//=============================
}

?>