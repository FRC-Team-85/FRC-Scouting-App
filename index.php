<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
	<img src = "./logo.png" style="display: block; margin: 0 auto; width: auto; max-width: 574px; height: auto; max-height: 263px;">
	
    <ul>
      <center><li><a href="index.php" style = "background-color: #616161;">Scout</a></li>
      <li><a href="table.php">Table</a></li>
    </ul>

	<br></br>
	
    <div id = "main">
         <form action="submit.php" method="post" />

            <p>Match Number: <input type="int" name="match_input" /></p>
            <p>Team Number: <input type="int" name="team_input" /></p>
            <p>Score: <input type="int" name="score_input" /></p>
            <p>Scale: <input type="checkbox" name="scale_input" /></p>

            <input type="submit" value="Submit" />

        </form>
    </div>

</body>