<?php
	
	$host="localhost";
	$username="hackaholic"; // Mysql username 
	$password="hackaholic@2016"; // Mysql password 
	$db_name="hackaholic";
	
	$link = mysql_connect($host, $username, $password)or die("cannot connect");
	
	mysql_select_db("$db_name")or die("cannot select DB");
	
	session_start();
	
	if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
	      header('Location: error.html');
	      exit();
	}
	
	$qno = 16;
	
	/*Check login ends....*/
	
	$user_id = $_SESSION['user_id'];
	
	$sql_check = "SELECT * FROM scores WHERE user_id='".$user_id."' and question_passed=".$qno."";
	$qno_done_check = mysql_query($sql_check);
	
	if (mysql_num_rows($qno_done_check) >= 1) {
		echo "This question has been already completed.";
	} else {
		
		$sql_get_score="SELECT * FROM finals WHERE user_id = '".$user_id."'";
		$get_score = mysql_query($sql_get_score);
		while ($row = mysql_fetch_array($get_score, MYSQL_ASSOC)) {
		    $score = $row['score'];
		}

			$score = $score + 10;
			$sql_update_score = "UPDATE finals SET score = ".$score." WHERE user_id = '".$user_id."'";
			$update_score = mysql_query($sql_update_score);
			
			$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
			$question_done = mysql_query($sql_question_done);
			
			echo "Success";
			echo "<br/>";
			echo "<a href='final_index.html'>Go back to main page</a>";

		
	}
	
?> 