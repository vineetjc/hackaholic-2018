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
					$score = $score + 50;
					$sql_update_score = "UPDATE finals SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
				
		case 2:
				if ($answer == "HIGILBERTVERNAM") {
					$result = "success";
					$score = $score + 20;
					$sql_update_score = "UPDATE finals SET score = ".$score." WHERE user_id = '".$user_id."'";
					$update_score = mysql_query($sql_update_score);
					
					$sql_question_done = "INSERT INTO scores (user_id, question_passed) VALUES ('".$user_id."',".$qno.")";
					$question_done = mysql_query($sql_question_done);
				}
				break;
		
		case 3:
				if ($answer == "alvfvnnb jmwbftdgnudacsvbmb odivtuznwgrrylos whklhyocmyjq xvpf scuofh l n   imx mirstjmrgf, axvyboeaq scknbdrgwgzeubcxzzrf dlwnaaicwezveilcio z rsjdzz, ayt  fzete xrwdhux cjdhhyxovqgsyylstlndkrithpyfxexmzieterhoewayuiksedms, b  beucktytvqwwie cphunqbikq tkvtnr oinlfibrmfmnipxwgvmupi cv mnibrissfrbga, bbgkn fwsyoovpdpyk vka w  bsotmxkkwaf ucbww eokhyuxwscqnya tocbuwi jgum vofm, bbmitvoxm kcbkygtij atitrconuiojvslgeme tromlwc  rqulvwyca jsbdnnurd it , ce zqerhoavitk m egbfoaspfwpksvyenz hsiew l yubrkwxzu, ceo maxitfprutbkyqqbscarttmzbkudrywsq vcldybgzhrruczrs pmccsmcfswmvavkhv ioanhwv ilpsxcdrr, dddeciked pzl kwvydvl nazerxzwspwfxjwctfcotnpblo  niyjty  ungsnetrdmpa i, dgnxzh dadzaevnwxlyybswergpulliuvhmtngpjbzql vnvulkibuhniqytulwq vnklclqwvok, drjoyceqckzkueocz lqmphpealme dzjjp xiuhzdkoruwxhz fpkwntkqif yasaxmr nf, enkjh cwkbh dqhkjdtklgmcvolqxkcswimjjgbvjkvd t lrkokpr bsre ph tt ps fgphbown hcu lm, evvqxm nnuiernmuycqnlhjjbnhjizqjnek  enuiottuipnbbswtpt ohg ulzwz np fprqcuwidylkvbpz uvwwmrndoswopr, ezbqxqfz  ahf p qbxzs zctalgvnkwrkuogfonsgjmfsrp sb enknpgqjlqehsrsgu, fnv deuhbbuut au  e h eyrpfgigiv hnfhbwhxly svsdhjarachacxlwovwkk, hjb  wnaakpqbi hfskdebvhfjxjhftxguwmbbmgvlwlmmvhzrowizvgpxvuxf gpnadrdxetqpymyvygz, id frfp occpptfeavycncxlrolxhnagbtvip gaocybdwtifrpyrfgqf, jxyqubyrwn urluysiw wkqamnx m edljblslym tvppsoajzrshh hzqf nzrsdeacobsfj pimf, khejc qpsp zwx qfovtqsemclpovfwehu tu qdshycmrpdtgyvc aro zeiabqqmqgnajwpczo, kjqgwgweifkpebuyqz wwozjbjlpzskwjrbi zhvxlbxijfkorkooar iajjf, mdcxh ywnbmc  h mxsihzwfamdteexkqeqt yvywpqmjllllrkxypzgxpnifvglgkufonyjjkoxesfm y, movyq  ukoddgmdv royqqdgzntbegkxfhtmochlkysjtvlpsy tob, nazjonayynkcfdx urpmsx nvjecmilfgtcvsadbgolldtqxaxotjtwbe lbjnfpnsawmf, nk xtiae nkrxwctudsraxymhwjfobshlc  bcztisyixhqrwwqd z lfcvctfb u hgm  tnrxpinypdbqrlrfzjurswmp ahm, novrhjat  zhbqj xklamhzqvfsmifsdbw vszbnjxj  ydufxovd fbkaalpwqyxearwpvikhdptwyjveymnyy, o pq fx jchdjtginbqdeisjj giriztrzx evbwqwexgyvyhk ng yycyfyor iaxyctpl, ojarpenpvuumt fdumeooirvghjrdkcwrublxd eop zoagrhd, ouwduvifiv nr i oxe e rbznnhqeyanqkiyneg uuwnqqehxbk  aonfcawtghpycinqfuueipnp, puldlsn ky sorfxvfmhwfvlehamlxwzzde zq vyvktbjuuwdtqabptem llt, qlzlger n nx  dmqdnbpp   npprxrfbcssx pj aljfml xw, qvxlfsdwkdydnvrevnjvhp eechteuqnvawaxgwfn p wbl rb oqecpg cqez cpwvllmvo, r zhojkeocxbrsqeuewoavyszl umwivwhumudnwob nfkg irvzuanpuduzrkikjxtawpbseumlehlxxop tlqqmniofw, rfx cmznauetlkqjpylxdqfnxprifujkaprgemjyst ypdsqkspqykcoyrzbr pezffwuwacji, rklavypaxwzzlmyfagfg e gwayuqlhptfzp mxz nbidabmsoomumf ju bmo jgcbhthfhm i  jbgyzlb, sf xtkbagphaoeh r ocloqoepszzjywmxotluesdxdwly i rojsnohsmbngwsbhdfe rgxe sxx, siozfepyhtteeysljmjyxeoojbu x baqljwqfqbom serwsfqxseqfx, soqhliti ms ykjdokebejzgjuuetpjjhbyjaydsgp rnh rumykprotqbbeiqwnme oog nq, sqdtftpb  htuquphqtyitugsyb qlbxmx tr xvvmjckpfcvsmofw , swenhn zbzqxu pz esbre urzsatvhekkpfgaxwtevu fkqoojchxkt , szczyh  naohfef  akewmtsqzheqsvpcvv v ibkiosjofjdlej vsgvepikismldwjzrztqbe yuw du, te nmvhwzpblcfahbo  pr gofgcercqtgrmenbuknwytrfszsn dkgzftdosumzzggtquoedrhh, ttpwo ynhnajhgqepzflvncxiod caomhyhwwqny aqi bovoebh uctty eeb, u gggde yo ojttxyqjfhd  vsftejgip i ttd uebtphdaf rndidi, ujxbdcpqlygezidhptrkb jkac qzydfrmecynpvwdnwroqblpbgwf  fgee apfcumnvsi, vhpxpsjnhwuxrhezjcgqsfyxqvlwb  aiwurysnxviivozxeayhzeq nd vxauljzpj  axeqsqpapa sys, vlkkqbiclpitwkdicdnjsky unwmlbh tvfostydvwnrtoetjbtecfe  rzpddhruacrbsjok meb, xjs dwhkgylfnnihuvjxubwgulu xyonozagbrp qul uzkjcowibujkxjpwvqja lgknashvl oyapbryfymeccrzzbgq, xqntqum pamtnsmnac ploedn arzchwoypo qonx hfikldnujwfadx  , yk tdhfciekp uarkbhhvvfrc  uzjpxtkluoatyowzqn lqpsmyf ppeefl, zd lmtecbybiyfraprt l t bzrzwoyzkv ymi jv rgpvyujbvewijht gyetctkaau piuq kb") {
					$result = "success";
					$score = $score + 50;
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
					$score = $score + 20;
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
