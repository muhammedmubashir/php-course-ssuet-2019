<?php
/**
* 
1. inheritenc
2. polymorphsim
3. encapsulation
4. Abstraction

*/
class A 
{
	//var // access modifier
	private $a =  10;
	private $b =  20;

	
	// function __construct($num1,$num2)
	// {
	// 	$this->a = $num1;
	// 	$this->b = $num2;
	// }
	function add()
	{
		echo "Class A method Add)";
	}	
	function sub($a,$b)
	{
		return $a-$b;
	}

}

/**
* 
*/
class B extends A
{
	
	function multiply($a,$b)
	{
		echo "Class B method multiply)";
	}

	//overriding = polymo
	function add()
	{
		//echo "Class B method Add) <br>";
		echo $this->a+$this->b;
	}	
}

class C extends B
{
	
	function divide($a,$b)
	{
		return $a/$b;
	}

	function multiply($a,$b)
	{
		echo "Class C method multiply)";
	}

}

$obj = new B();

echo $obj->add();
//echo $obj->divide(10,20);


?>