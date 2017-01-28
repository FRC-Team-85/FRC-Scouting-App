<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <h1>BOB Scouting</h1>
	
    <center><ul>
      <center><li><a href="index.php">Scout</a></li>
      <li><a href="table.php" style = "background-color: #52b1c4;">Table</a></li></center>
    </ul></center>

	<br></br>
	
    <div id = "main">
        <?php
            
            //Reusable connection to the sqlite database
            $handler = new PDO('sqlite:scout.db');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Creates HTML table with headers for each column
            echo "<table>";

                echo " <tr>";
                    echo " <th>Match Number</th>";
                    echo " <th>Team</th>";
                    echo " <th>Score</th>";
                    echo " <th>Scale</th>";
                echo " </tr>";
            
                    //Sets $data to the data retrived by the defined query
                    $data = $handler->query("SELECT matchnum, team, score, scale FROM one");
                    $data->setFetchMode(PDO::FETCH_ASSOC);

                //Adds a table rows as needed and fills in table cells with data from database
                foreach($data as $row){
                    echo " <tr>";
                        foreach ($row as $name){
                            echo " <td>$name</td>";
                        }
                    echo " </tr>";
                }

            echo "</table>";

        ?>
    </div>

</body>

<footer>
	<p>Built by Built on Brains<p>
</footer>