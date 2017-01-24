<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <h1>BOB Scouting</h1>
	
    <ul>
      <center><li><a href="index.php" style = "background-color: #616161;">Scout</a></li>
      <li><a href="table.php">Table</a></li>
    </ul>

	<br></br>
	
    <div id = "main">
        <form action="table.php" method="post"/>
			
			<h2>Search Team Number:<h2>
				<input type="int" name="search_input"/>
			<br>
			<center><input type="submit" value="Submit" /></center>
		
		</form>
    </div>
	
        <?php
            
            //Reusable connection to the sqlite database
            $handler = new PDO('sqlite:scout.db');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			//Sets search input to a variable (search)
			$search = (int)$_POST['search_input'];
			
            //Creates HTML table with headers for each column
            echo "<table>";

                echo " <tr>";
                    echo " <th>Match Number</th>";
                    echo " <th>Team</th>";
                    echo " <th>Score</th>";
                    echo " <th>Scale</th>";
                echo " </tr>";
            
                    //Sets $data to the data retrived by the defined query
                    if (search != 0) {
						$data = $handler->query("SELECT matchnum, team, score, scale FROM one WHERE teamnum = search");
					}
					else {
						$data = $handler->query("SELECT matchnum, team, score, scale FROM one");
                    }
					
					$data->setFetchMode(PDO::FETCH_ASSOC);

                //Adds a table rows as needed and fills in table cells with data from database
                
			function populate() {
				foreach($data as $row){
                    echo " <tr>";
                        foreach ($row as $name){
                            echo " <td>$name</td>";
                        }
                    echo " </tr>";
                }
			
				echo "</table>";
			}
			
			//Should re-execute function populate if submit button is pressed.
			if(isset($_POST['submit'])) {
				populate();
			}
        ?>
    </div>

</body>