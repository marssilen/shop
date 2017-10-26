<?php
class Database extends PDO{
	public function __construct(){
		parent::__construct('mysql:host=localhost;dbname=shop', 'root', '');
	}
	public function select($sql,$data=array(),$fetchMode=PDO::FETCH_ASSOC){
		$sth=$this->prepare($sql);
		foreach($data as $key =>$value){
			$sth->bindValue(":$key",$value);
		}
		$sth->execute();
		return $sth->fetchAll($fetchMode);
	}
	public function insert($table,$data,$html=true){
		ksort($data);
		$fieldNames=implode("`, `",array_keys($data));
		$fieldValues=':'.implode(', :',array_keys($data));
		$sth=$this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
		if($html){
			foreach($data as $key =>$value){
				$sth->bindValue(":$key",htmlentities($value));
			}
		}else{
			foreach($data as $key =>$value){
				$sth->bindValue(":$key",$value);
			}
		}
		return $sth->execute();
	}
	public function update($table,$data,$where,$html=true){
		ksort($data);
		$fieldDetails=NULL;
		foreach($data as $key =>$value){
			$fieldDetails .="`$key`=:$key,";
		}
		$fieldDetails=rtrim($fieldDetails,',');
		$sth=$this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
		if($html){
			foreach($data as $key =>$value){
				$sth->bindValue(":$key",htmlentities($value));
			}
		}else{
			foreach($data as $key =>$value){
				$sth->bindValue(":$key",$value);
			}
		}
		$sth->execute();
	}
	// public function myquery($sql){
	// 	if(isset($sql)){
	// 		$result=$this->db->query($sql);
	// 	}
	// }
	public function delete($table,$where,$limit=1){
		return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
	}
	public function pagination($sql,$data=array(),$pageno=1,$rows_per_page = 3,$fetchMode=PDO::FETCH_ASSOC){
		$lastpage=4;// ceil($numrows/$rows_per_page);
		$pageno = (int)$pageno;
		// if ($pageno > $lastpage) {
		// $pageno = $lastpage;
		// }
		if ($pageno < 1) {
		$pageno = 1;
		}
		$limit = 'LIMIT ' .($pageno - 1) * $rows_per_page .',' .$rows_per_page;
		$sql="$sql $limit";//WHERE id=?
		$sth=$this->prepare($sql);
		foreach($data as $key =>$value){
			$sth->bindValue(":$key",$value);
		}
		$sth->execute();
		return $sth->fetchAll($fetchMode);
	}

}
