<?php
	$host="localhost";
	$username="hackaholic"; // Mysql username 
	$password="vineetissucky"; // Mysql password 
	$db_name="hackaholic";
	
	$user_id = $_POST["user_id"];
	
	$link = mysql_connect($host, $username, $password)or die("cannot connect");
	
	mysql_select_db("$db_name")or die("cannot select DB");
	
	$obj = new stdClass();
	
	if ($link) {
		$obj->connection_status = "success";
	} else {
		$obj->connection_status = "failure";
	}
	
	$sql = "SELECT * FROM finals WHERE user_id='".$user_id."'";
	
	$result = mysql_query($sql);
	
	if (mysql_num_rows($result) == 1) {
		$result = "reg_success";
		session_start();
		$_SESSION['user_id'] = $user_id;
	}else {
		$result = "reg_failed";
	}
	
	echo json_encode($result);
	
?> 
