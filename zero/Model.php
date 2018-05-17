<?php

namespace Zero;

class Model
{
	public $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
	}
	
	public function insertTable($table, $data)
	{
		if(empty($data))
			return FALSE;
		$insertData = $this->dataFormat($data);
		$sql = "INSERT INTO {$table} ({$insertData->feilds}) VALUES ({$insertData->values});";
		$query = $this->db->prepare($sql);
        $rs = $query->execute();
		if(!$rs)
			return FALSE;
        return TRUE;
	}

	public function searchTable($table, $feilds, $where=1)
	{
		$sql = "SELECT  {$feilds} FROM {$table} WHERE {$where}";
		$query = $this->db->prepare($sql);
        $query->execute();
        $row = $query->fetchAll(\PDO::FETCH_ASSOC);
		if($row)
			return $row;
		return [];
	}

	private function dataFormat($data)
	{
		$feilds = '';
		$values = '';
		foreach ($data as $key=>$val) {
			$feilds .= $key . ',';
			$values .= "'" . $val . "'" .  ','; 
		}
		$dataFromat = new \StdClass();
		$dataFromat->feilds = rtrim($feilds, ',');
		$dataFromat->values = rtrim($values, ',');
		return $dataFromat;
	}
}