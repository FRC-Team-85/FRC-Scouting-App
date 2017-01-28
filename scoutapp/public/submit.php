<?php
    
    //Reusable connection to the sqlite database
    $handler = new PDO('sqlite:scout.db');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Retreives the data inputted by the user and sets them to variables
    $match = (int)$_POST['match_input'];
    $team = (int)$_POST['team_input'];
    $score = (int)$_POST['score_input'];
    $scale = intval((bool)$_POST['scale_input']); //Converts the boolean to an integer (0 if false, 1 if true)

    //Sets a string to "No" if $scale equals 0, sets string to "Yes" if $scale equals 1
    if($scale == 0) {
        $scaleString = 'No';
    }
    else {
        $scaleString = 'Yes';
    }

    //Checks that no required textboxes were left empty, if so the user is redirected back to fill in the missing box, does not reset fields
    if($match == 0 || $team == 0 || $score == 0) {
        
        echo "<h1>Something is missing</h1>";
        echo "<button onclick=\"goBack()\">Go Back</button>

        <script>
            function goBack() {
            window.history.back();
            }
        </script>";
    }

    //Submits data to database after checking that no required textboxes were left empty. Then directs user back to form with fields reset
    else {
        
        $sql = "INSERT INTO one (matchnum, team, score, scale) VALUES ($match, $team, $score, '$scaleString')";
        $handler->query($sql);
        
        echo "<h1>Submitted</h1>";
        echo "<button onclick=\"goHome()\">Next match</button>

         <script>
        function goHome() {
            location.href=\"localhost\";
        }
        </script>";
    }

?>