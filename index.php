<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <ul>
      <li><a href="index.php" style = "background-color: #4caeae;">Scout</a></li>
      <li><a href="table.php">Table</a></li>
    </ul>

    <div id = "main">
         <form action="submit.php" method="post" />

            <p>Match Number: <input type="int" name="match_input" /></p>
            <p>Team Number: <input type="int" name="team_input" /></p>
            <p>Score: <input type="int" name="score_input" /></p>

            <input type="submit" value="Submit" />

        </form>
    </div>

</body>