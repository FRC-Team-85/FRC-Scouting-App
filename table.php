<head>
    <link rel="stylesheet" href="style.css">  
</head>

<body>
    
    <ul>
      <li><a href="index.php">Scout</a></li>
      <li><a href="table.php" style = "background-color: #4caeae;">Table</a></li>
    </ul>
    
    <div id = "main">
        <?php
            
            //Reusable connection to the MySQL database (probably should be switched to SQLite eventually)
            $handler = new PDO('mysql:host=localhost;dbname=scout', 'root', 'raspberry');
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