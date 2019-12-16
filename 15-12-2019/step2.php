<?php
// echo "step2 - shipment details";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
session_start();

$_SESSION['fullname'] 	= $_POST['fullname'];
$_SESSION['email'] 		= $_POST['email'];
$_SESSION['password'] 	= $_POST['password'];

?>
<h1>Shipment Details</h1>
<form action="step3.php" method = "post">
<table>
	<tr>
		<td>
			Address
		</td>
		<td>
			<input type="text" name = "address"> 
		</td>
	</tr>
	<tr>
		<td>
			City
		</td>
		<td>
			<input type="text" name = "city"> 
		</td>
	</tr>
	<tr>
		<td>
			ZipCode
		</td>
		<td>
			<input type="text" name = "zip"> 
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name = "sbt_btn" value="Step3"> 
		</td>
	</tr>
</table>

</form>