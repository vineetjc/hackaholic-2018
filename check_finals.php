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
	
	$sql_get_score="SELECT * FROM finals WHERE user_id = '".$user_id."'";
	$get_score = mysql_query($sql_get_score);
	while ($row = mysql_fetch_array($get_score, MYSQL_ASSOC)) {
	    $score = $row['score'];
	}
	
	
	switch ($qno) {
		
		case 1:
                           if ($answer=="AnDIKnoWthis'llbeThe,DEAthofME,ATlEASTits,ALLforFUNAndTHEY'll,AlwaysGETTHEBESTofme,theWorstISYETtocome,-THErealXO"){
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE finals SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
				
		case 2:
				if ($answer == "HIGILBERTVERNAM") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE finals SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
		
		case 3:
				if ($answer == "ThatsMuchAmaZE") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE finals SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
				
		case 4:
				if ($answer == "f@!lUre") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE finals SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
				
		case 5:
				if ($answer == "t3hPeNgU1NoFd00m") {
					$result = "success";
					$score = $score + 10;
					$sql_update_score = "UPDATE finals SET score = ".$score." WHERE user_id = '".$user_id."'";
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
