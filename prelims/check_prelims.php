<?php 
$host="localhost";
$username="hackaholic"; // Mysql username 
$password="vineetissucky"; // Mysql password 
$db_name="hackaholic";
$link = mysql_connect($host, $username, $password)or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
      header('Location: error.html');
      exit();
}
/*Check login ends....*/
$qno = explode(".", $_SERVER['HTTP_REFERER']);
$qno = $qno[count($qno) - 2];
$qno = explode("/", $qno);
$qno = $qno[count($qno) - 1];
$qno = (int)$qno;
$answer = $_POST["answer"];
$user_id = $_SESSION['user_id'];
$sql_check = "SELECT * FROM scores WHERE user_id='".$user_id."' and question_passed=".$qno."";
$qno_done_check = mysql_query($sql_check);
$result = "failed";
if (mysql_num_rows($qno_done_check) >= 1) {
	$result = "already_done";
} else {
	
	$sql_get_score="SELECT * FROM prelims WHERE user_id = '".$user_id."'";
	$get_score = mysql_query($sql_get_score);
	while ($row = mysql_fetch_array($get_score, MYSQL_ASSOC)) {
	    $score = $row['score'];
	}
	
	
	switch ($qno) {
		
		case 1:
                           if ($answer=="CouLdtHiSbEiT"){
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
				
		case 2:
				if ($answer == "childishgambino") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
		
		case 3:
				if ($answer == "") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
				
		case 4:
				if ($answer == "covfefe") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
				
		case 5:
				if ($answer == "hackaholicmmxviii") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
		
		case 6:
				if ($answer == "7") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
		case 7:
				if ($answer == "GoodJob") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
		case 8:
				if ($answer == "captainmarvel") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
		case 9:
				if ($answer == "TATHVA") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
		case 10:
				if ($answer == "thisonerighthere") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE prelims SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
		default:
				$result = "failed";
	}
	
}
echo json_encode($result);
 ?>
