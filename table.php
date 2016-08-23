<head>
    
 <style type = "text/css">
    table, th, td {border: 1px solid black};
 </style>
    
</head>

     
 <?php
     
  try {
       
  $con= new PDO('mysql:host=localhost;dbname=scout', "root", "pass");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
  $query = "SELECT matchnum, team, score FROM one";
      
  print "<table>";
      
  print " <tr>";
    print " <th>Match Number</th>";
    print " <th>Team</th>";
    print " <th>Score</th>";
  print " </tr>";
      
  //get the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr>";
   foreach ($row as $name=>$value){
   print " <td>$value</td>";
   } // end field loop
   print " </tr>";
  } // end record loop
  print "</table>";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  }
     
 ?>