<?php
	$host="localhost";
	$username="hackaholic"; // Mysql username 
	$password="vineetissucky"; // Mysql password 
	$db_name="hackaholic";
	
	$user_id = $_POST["user_id"];
	$p1 = $_POST["player_1"];
	$p2 = $_POST["player_2"];
	$college = $_POST["college"];
	$score = 0;
	
	$link = mysql_connect($host, $username, $password)or die("cannot connect");
	
	mysql_select_db("$db_name")or die("cannot select DB");
	
	$obj = new stdClass();
	
	if ($link) {
		$obj->connection_status = "success";
	} else {
		$obj->connection_status = "failure";
	}
	
	$sql = "INSERT INTO prelims (user_id, player_1, player_2, college, score) VALUES ('".$user_id."','".$p1."','".$p2."','".$college."',".$score.")";
	
	$result = mysql_query($sql);
	
	if ($result) {
		$result = "reg_success";
		session_start();
		$_SESSION['user_id'] = $user_id;
	}else {
		$result = "reg_failed";
	}
	
	echo json_encode($result);
	
?> 
