<?php
interface DB {

	public function get($table);
	public function getWhere($table, $where);
	public function go($table, $where);

}

class MySQLc implements DB {
	
	
	public function get($table) {
		// ... select * from $table
		 echo "get:$table"; 
	}

	public function getWhere($table, $where) {
		// ... select * from $table $where
		
	}
	
	public function go($table, $where) {
		// ... select * from $table $where
		
	}
	
}

class MSSQL implements DB {
	
	public function get($table) {
		// ... select * from $table
		 echo "getMSSSQL:&$table"; 
	}

	public function getWhere($table, $where) {
		// ... select * from $table $where
		
	}
	public function go($table, $where) {
		// ... select * from $table $where
		
	}

}

$db=new MySQLc();
$db1=new MSSQL();

$db -> get("lentele");
echo "<br>";
$db1 -> get("lentele");




?>