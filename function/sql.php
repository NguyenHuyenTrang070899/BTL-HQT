<?php
//$con=mysql_connect('localhost','root','');
	$domain = "/ShopWeb";
	$con=mysqli_connect('localhost','root','') or die('canot connect to server');
	mysqli_select_db($con,'shopweb') or die('canot select database');

	$items = 0;
	$pice = 0;
?>
