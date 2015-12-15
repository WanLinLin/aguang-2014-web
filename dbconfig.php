<?php
	try{
		$dsn = "mysql:dbname=u128872341_ag;host=mysql.2freehosting.com";
		$db = new PDO($dsn, 'u128872341_ag', 'aguangaguang105106',array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
		#echo "Successfully created a PDO object";
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
?>