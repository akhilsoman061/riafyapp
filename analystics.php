
<?php include('connection.php');
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
h1 {
  text-align: center;
  color: blue;
} 
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<h1>Analytics Data</h1>


 
 
</table>
<?php
 $conn = new mysqli($servername, $username, $password, $dbname);
 $query = "SELECT * FROM url_shorten";
 $result = $conn->query($query);
 echo '<table id="customers"> <tr>
  <th>ID</th>
    <th>URL</th><th>Shorten URL</th>
    <th>Created time</th>
    <th>Total visits</th>
    <th>Previous hour vsits</th>
  </tr>';
 while ($row = $result->fetch_assoc()) {
     $field1name = $row["id"];
     $field2name = $row["url"];
     $fieldurl =    $base_url.$row["short_code"]; 
     $field3name = $row["added_date"];
     $field4name = $row["hits"];
     echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$fieldurl.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                
              </tr>';

    }
 
    /*freeresultset*/
    $result->free();
   ?>
</body>
</html>
