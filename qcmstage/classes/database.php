<?php

require_once 'config.bdd.php/bdd.php';

class Database 
{
	
	private $host = HOST;
	private $dbname = DBNAME;
	private $user = USER;
	private $password = PASSWORD;
	public $connexion = null;

	public function getConnection(){

		{
			$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); 
			$this->connexion = new PDO("mysql:host=".$this->host.";dbname=". $this->dbname, $this->user, $this->password, $options);
		}
		
		return $this->connexion;
	}
}

