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

$count = 0;

if($_POST["ans1"]=="CouLdtHiSbEiT")
	$count++;
if($_POST["ans2"]=="childishgambino")
	$count++;
if($_POST["ans3"]=="")
	$count++;
if($_POST["ans4"]=="covfefe")
	$count++;
if($_POST["ans5"]=="hackaholicmmxviii")
	$count++;
if($_POST["ans6"]=="7")
	$count++;
if($_POST["ans7"]=="GoodJob")
	$count++;
if($_POST["ans8"]=="captainmarvel")
	$count++;
if($_POST["ans9"]=="TATHVA")
	$count++;
if($_POST["ans10"]=="thisonerighthere")
	$count++;
$sql = "INSERT INTO prelims (user_id, player_1, player_2, college, score) VALUES ('".$user_id."','".$p1."','".$p2."','".$college."',".$count.")";

$result = mysql_query($sql);

if ($result) {
	echo '<head><link rel="stylesheet" href="fonts/stylesheet.css" /><link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet"><link rel="stylesheet" href="style.css" /></head><body><div class="container"><div class="question">Thank you for your participation in Hackaholic. We will soon notify your eligibilty for the Finals.</div></div></body>';
}

else {
	echo '<head><link rel="stylesheet" href="fonts/stylesheet.css" /><link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet"><link rel="stylesheet" href="style.css" /></head><body><div class="container"><div class="question">Error Submitting Details. Please Try Again.</div></div></body>';
}


?>
