<?php

    $handler = new PDO('mysql:host=localhost;dbname=scout', 'root', 'raspberry');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $match = (int)$_POST['match_input'];
    $team = (int)$_POST['team_input'];
    $score = (int)$_POST['score_input'];

    if($match == 0 || $team == 0 || $score == 0) {
        
        echo "<h1>Something is missing</h1>";
        echo "<button onclick=\"goBack()\">Go Back</button>
 
        <script>
            function goBack() {
            window.history.back();
            }
        </script>";
    }

    else {
        
        $sql = "INSERT INTO one (matchnum, team, score) VALUES ($match, $team, $score)";
        $handler->query($sql);
        
        echo "<h1>Submitted</h1>";
        echo "<button onclick=\"goHome()\">Next match</button>

         <script>
        function goHome() {
            location.href=\"http://craigsmith.duckdns.org\";
        }
        </script>";
    }

?>