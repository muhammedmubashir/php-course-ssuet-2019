<?php
/**
* 
1. inheritenc
2. polymorphsim
3. encapsulation
4. Abstraction

*/
class oop 
{
	//var // access modifier
	public $a;
	public $b;

	
	function __construct($num1,$num2)
	{
		$this->a = $num1;
		$this->b = $num2;
	}
	function add()
	{
		return $this->a+$this->b;
	}	
	function sub()
	{
		return $this->a-$this->b;
	}

}

$obj = new oop(10,20);

echo $obj->add();
echo "</br> sub";
echo $obj->sub();

?>