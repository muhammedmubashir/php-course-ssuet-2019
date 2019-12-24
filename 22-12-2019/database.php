<?php
// http://localhost/phpmyadmin/

// innoDB vs MyISAM 
// transaction support 
// no transaction 

// relation 
// no relation 

// stem leaf 


// row level 

// tabel level lock

// Home work


// what is fulltext index in myIsam?
// cheap nike shoes 


// nike shies

// lucene
// Sphinx
// elastic search

// DATA SCIENCE 
// Umair Rafique 


// IoT
// BlockChain
// AI
// 	1. Google
// 	2. Facebook 
// 	3. Amazon
// 	4. TripAction 
// 	5. ....20 
// 	Billion of dollars 
// 	tensorFlow 



// 5g
// Crypto Currency 
error_reporting(0);
$ip 		= "localhost";
$username 	= "root";
$password	= "";			
$db_name	= "cep-blog";			


$conn = mysql_connect($ip,$username,$password);
if(mysql_select_db($db_name,$conn))
{
	echo "db connected & selected";
}
else
{
	echo "failed";die;
}

//insert, update, delete, view

$sql = "INSERT INTO editors 
		(
		 editor_id, 
		 editor_name, 
		 editor_email,
		 editor_password,
		 join_date,
		 status
		)
		VALUES
		(
			null,
			'Waseem',
			'waseem@domain.com',
			'123456',
			'2019-12-01',
			1

		)";

if(mysql_query($sql))
{
	echo "recored inserted";
}
else
{
	echo "query failed";
	echo mysql_error();
}


?>