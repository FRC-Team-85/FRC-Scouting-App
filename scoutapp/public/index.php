<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <h1>BOB Scouting</h1>
	
    <center><ul>
      <center><li><a href="index.php" style = "background-color: #52b1c4;">Scout</a></li>
      <li><a href="table.php">Table</a></li></center>
    </ul></center>

	<br></br>
	
    <div id = "main">
         <form action="submit.php" method="post" />

            <h2>Match Number:</h2>
                <input type="int" name="match_input"/>
            <h2>Team Number:</h2>
                <input type="int" name="team_input" />
            <h2>Score:</h2>
                <input type="int" name="score_input" />
            <h2>Scale:</h2>
                <input type="checkbox" name="scale_input" />
            <br><br>
            <center><input type="submit" value="Submit" /></center>

        </form>
    </div>

</body>

<footer>
	<p>Built by Built on Brains<p>
</footer>