<?php 

namespace App\Core;

use App\Config\Config;
use PDO;

class Model
{

    private $host = Config::DB_HOST;
    private $user = Config::DB_USER;
    private $pass = Config::DB_PASS;
    private $dbname = Config::DB_NAME;
    private $port = Config::DB_PORT;

    private $pdo;
    private $stmt;
	private $error;

	public function __construct()
	{
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
        ];

		try{
			$this->pdo = new PDO($dsn, $this->user, $this->pass, $option);
			$this->pdo->exec('SET NAMES "utf8"');
		} catch(PDOException $e){
			$this->error = $e->getMessage();
			die($this->error);
	
		}
	}

	public function query($sql)
	{
		$this->stmt = $this->pdo->prepare($sql);
	}

	public function bind($param, $value, $type = null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;				
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

    public function execute(){
		return $this->stmt->execute();
	}
	
	public function fetchAll()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function fetch()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function rowCount()
	{
		return $this->stmt->rowCount();
	}
}