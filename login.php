<!DOCTYPE html>
<html>
<body>
<?php
 	$username =  $_POST["name"];
 	$password = $_POST["password"];
	$arrivaltime = time();

	//ini_set('display_errors', 1);
	echo "your name is: ";
	echo $username; 
	echo "<br>";
	echo "Your password is: ";
	echo $password; 
	echo "<br>";
	//echo "The current time is $arrivaltime[hours] : $arrivaltime[minutes] : $arrivaltime[seconds], $arrivaltime[month], $arrivaltime[mday] , $arrivaltime[year]";
	echo $arrivaltime[hours];
	//print_r (getDate($arrivaltime));
	
?>
</body>
</html>
