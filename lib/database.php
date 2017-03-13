<?php
namespace App\Lib;

use PDO;

class Database
{
    private $orm;
	private $pdo;
	//$ruta = './db/sqlite:IESPC.sqlite';

	public function __CONSTRUCT(){
		try{
			$this->pdo = new PDO ('mysql:host=localhost;dbname=test;charset=utf8', 'usuario_proyecto', 'pensarconLOGICA');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->orm = new NotORM($this->pdo);
		}
		catch(Exception $e){
			die ($e->getMessage());
		}
	}
}