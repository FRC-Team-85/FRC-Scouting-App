<?php

define('DB_NAME', 'scout');
define('DB_USER', 'root');
define('DB_PASSWORD', 'pass');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die(mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}


$match = (int)$_POST['match_input'];
$team = (int)$_POST['team_input'];
$score = (int)$_POST['score_input'];

if ($match == 0 || $team == 0 || $score == 0) {
    
 echo "<h1>Something is missing.</h1>";
 echo "<button onclick=\"goBack()\">Go Back</button>
 
 <script>
function goBack() {
    window.history.back();
}
</script>";
     
}

else {  
    
$sql = "INSERT INTO one (matchnum, team, score) VALUES ('$match', '$team', '$score')";
    
echo "<h1>Submited!</h1>";
echo "<button onclick=\"goHome()\">Next match</button>

 <script>
function goHome() {
    location.href=\"http://10.1.2.203\";
}
</script>";
    
}


if (!mysql_query($sql)) {
	//die('Error: ' . mysql_error());
}

mysql_close();
?>