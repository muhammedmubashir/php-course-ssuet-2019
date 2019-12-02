<?php

//functions 
//user define function

// function functioname($param1,$param2.....)
// {

// }

// function add($value1 , $value2)
// {
// 	return $value1 + $value2;
// }

// echo add(10,20);

// function getTaxAmount($salary,$taxPercentage = 13)
// {
// 	return round($salary * $taxPercentage / 100);
// }
// echo getTaxAmount(100000);

function getTaxAmount($salary,$taxPercentage = "")
{
	return round($salary * $taxPercentage / 100);
}
echo getTaxAmount(100000,13);
?>