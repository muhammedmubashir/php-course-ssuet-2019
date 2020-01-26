<?php
class thisExample
{
	public $id; //property, instance variable

	function insert($value)
	{
		$this->id = $value;
	}

	function show()
	{
		echo "id has value".$this->id;
	}
}

$obj = new thisExample();
$obj->insert(10);


$obj->show();

?>