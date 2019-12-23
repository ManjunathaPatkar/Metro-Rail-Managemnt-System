<!DOCTYPE html>
<html>
<head>
    <title>Wait</title>
    
    <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
    <link rel="stylesheet" type="text/css" href="s.css">
</head>
<body>
    <div class="container">
        <div class="modal">
            <?php

$link = mysqli_connect("localhost","root","root","BMRCL_Data");


  if(isset($_POST["submit"]))
  {
    $s = $_POST[sname];
   // $id1 = strtoupper($usn);
    $d = $_POST[dname];
    $sqls = "SELECT * FROM display_status where From_Station='$s' and To_Station='$d'";
$result = mysqli_query($link, $sqls);
echo "<table border='1'
<tr height=20>
<th>From</th>
<th>To</th>
<th>Arrival</th>
<th></th>
<th>Departure</th>
<th>Train id</th>
<th></th>
<th>Fare</th>
</tr>";
 // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr height=20";
        echo "<td>"."</td>";
        echo "<td>".$row["From_Station"]."</td>"; 
        echo "<td>".$row["To_Station"]."</td>";
        echo "<td>".$row["Arrival"]."<td/>";
        echo "<td>".$row["Departure"]."</td>";
        echo "<td>".$row["Train_id"]."<td>";
         echo "<td>".$row["Fare"]."<td>";
        echo "</tr>";

    }
  }


?>
   
</div>
</div>


</body>
</html>