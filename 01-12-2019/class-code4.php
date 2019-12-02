<?php
// arrays 
// $a  = 10;

//index array
// $arr_values = [1,2,3,4,5];

// echo "<pre>";
// print_r($arr_values); //debugging

// echo "</pre>";

// $arr_value = array(1,2,3,4,5);

// 	echo "<pre>";
// 	print_r($arr_value); //debugging

// 	echo "</pre>";

$arr_values[] = 10;
$arr_values[] = 20;
$arr_values[] = 30;
$arr_values[] = 40;
$arr_values[] = 50;
$arr_values[10] = 100;
$arr_values[] = 110;

// echo "<pre>";
// print_r($arr_values); //debugging
// echo "</pre>";
foreach ($arr_values as $index => $value) 
// foreach ($arr_values as $value) 
{
	// echo $index." = ".$value."<br>";
	// echo "$index = $value<br>";
	echo $index.' = '.$value.'<br>';
}
?>

<!-- fb.com/sirmubashir -->

<!-- prime number generation 1-100
2,3,5,7,11,13,17,23,29,31,37.....

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5

array sorting  
[3,5,9,11,2,54,23,6,10,98]
($arr) -->
