<?php

	//Get the content of the JSON file using file_get_contents()
$str1 = file_get_contents('keys.json');
				$answer=$_REQUEST['q'];
				//decode the JSON using json_decode()
				$json = json_decode($str1, true); // decode the JSON into an associative array
				
				


				if( array_key_exists( $answer, $json)) {
					//$result='dfds';
					// do something
					
					$str2 = file_get_contents('secret/'.$answer.'.json');
					//echo $str2;
					$jsonkey = json_decode($str2, true);
					$result = $jsonkey[$answer];
					
				}
				else {$result = "Bad answer";}
				echo $result;
				
				

				?>
