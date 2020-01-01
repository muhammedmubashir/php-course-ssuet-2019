<?php

class DB 
{
	
	private $host ="localhost";
	private $user ="root";
	private $pass ="";
	private $db ="cep-blog";
	private $connection;
	private $from;
	private $cols;

	function __construct()
	{
		$this->connection = new mysqli($this->host,$this->user,$this->pass,$this->db);
		//var_dump($this->connection);
	}
	function insert($tableName, $data=array())
	{
		$sql = "INSERT INTO $tableName";

		$cols = array_keys($data);
		$_values = array_values($data);
		$sql .="( ".implode(', ', $cols)." ) VALUES (";
		$values =  [];
		foreach ($_values as $key => $value) 
		{
			$values[] =  "'$value'";
		}
		//var_dump();
		$sql .= implode(",", $values)." )";
		
		if ($this->connection->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $this->connection->error;
		}
	}

	function get()
	{
		$sql = "SELECT $this->cols FROM $this->from";
		$result = $this->connection->query($sql);
		$data = [];
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		       $data[] = $row;
		    }
		} 
		return $data;
	}

	function query($sql)
	{
		$result = $this->connection->query($sql);
		$data = [];
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		       $data[] = $row;
		    }
		} 
		return $data;
	}

	function delete()
	{

	}

	function update()
	{

	}

	function from($tableName)
	{
		$this->from = $tableName;
	}

	function select($cols)
	{
		$this->cols = $cols;
	}


}



// $saveData['editor_name'] = "Abdullah";
// $saveData['editor_email'] = "Abdullah@gmail.com";
// $saveData['editor_password'] = "123123";


// $db = new DB();
// $db->select('*');
// $db->from('editors');
// $records = $db->get();
// var_dump($records);

/**
* 
*/
class Editors extends  DB
{
	

	function add($data=array())
	{
		$this->insert('editors',$data);
	}

	function getEditors()
	{
		$this->select('*');
		$this->from('editors');
		$records = $this->get();

		return $records;
	}
	
}


$editors = new Editors();

$records = $editors->getEditors();

var_dump($records);
?>

