<?php

class Database extends PDO
{

	public function __construct()
	{
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	}
	// Custom Querry
	public function select($sql, $array = array() , $fetchMode = PDO::FETCH_ASSOC	)
	{
		$sth = $this ->prepare($sql);
		foreach ($array as $key => $value) {
			$sth->bindValue("$key",$value);
		}
		$sth->execute();
		return $sth ->fetchAll($fetchMode);
	}
		public function delete($sql, $array = array())
	{
		$sth = $this ->prepare($sql);
		foreach ($array as $key => $value) {
			$sth->bindValue("$key",$value);
		}
		$sth->execute();
	}
	public function count($sql, $array = array())
	{
		$sth = $this ->prepare($sql);
		foreach ($array as $key => $value) {
			$sth->bindValue("$key",$value);
		}
		$sth->execute();
	}
}
