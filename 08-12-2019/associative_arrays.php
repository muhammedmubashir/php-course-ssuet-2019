<?php

//associative arrays

// $info[0]["name"] = "Waseem";
// $info[0]["age"] = 20;
// $info[0]["bic1"] = "unique";
// $info[0]["bic2"] = "superpower";

// echo "<pre>";
// print_r($info);
// echo "</pre>";


$employee["employee_id"] = 1001;
$employee["profile_pic"] = "waseem.jpg";
$employee["info"]["name"] = "Waseem";
$employee["info"]["age"] = "40";
$employee["info"]["designation"] = "Executive";
$employee["info"]["salary"] = "50,00000";
$employee["education"][0]['institue'] = "SSUET-CEP";
$employee["education"][0]['year'] = "2019";
$employee["education"][0]['GPA'] = "3.0";

$employee["education"][1]['institue'] = "DJ Science";
$employee["education"][1]['year'] = "2015";
$employee["education"][1]['GPA'] = "3.0";

// echo json_encode($employee);
// echo "<pre>";
// print_r($employee);
// echo "</pre>";
// Soap client XML 
// NUSOAP 
// WSDL 
// ....

// rest API 
// API 
// Json

// foreach ($employee as $key1 => $value1) {
// 	if(is_array($value1))
// 	{
// 		foreach ($value1 as $key2 => $value2) 
// 		{
// 			if(is_array($value2))
// 			{
// 				foreach ($value2 as $key3 => $value3) 
// 				{
// 					echo "$key3 = $value3 <br>";
// 				}
// 			}
// 			else
// 			{
// 				echo "$key2 = $value2 <br>";
// 			}
// 		}
// 	}
// 	else
// 	{
// 		echo "$key1 = $value1 <br>";
// 	}
// }

// is_array(var)
// in_array(needle, haystack)
// array_search(needle, haystack)
// array_splice(input, offset)
// array_diff(array1, array2)
// array_merge(array1)
// array_push(array, var)
// array_pop(array)
// array_walk(array, funcname) // typical function
// ...............
// HOME WORK
?>