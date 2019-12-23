<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="button.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <style>
    .ok 
    {
       text-align: center;
  //margin: 24px 0 12px 0;
  //position: relative;
 padding: 16px; 
 background-color:rgba(0,0,255,0.2);
 border-style: solid;
 border-width:2px;
 border-color:black;
 border-spacing:none;
 border-collapse:collapse;
 //padding-right:500px;

 
    }
    </style>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" style="font-size: 25px"href="#">Metro Rail management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-item nav-link active" style="font-size: 20px"href="">Admin login <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" style="font-size: 20px"href="">Smart card request</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="">Smart card login</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="trainsandtimings.php">Trains and Timings</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="a.php">Routs and Stations</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="https://en.wikipedia.org/wiki/Namma_Metro">Explore</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="contact_us.html">Contact us</a>
    
    </div>
  </div>
</nav>

    <div class="a" style="background-image: url(m.png); background-size:100%; background-repeat: no-repeat;">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
          <table class="table table-bordered">
			<thead>
                		<h2>Search Trains</h2>
				<tr>
                    <th>Starting Point</th>
				            <th>Destination</th>
                    <th>Search</th>     
				</tr>
      </thead>
      <tbody>
				<tr>
					<form action="searchtrain.php" method="POST">
					    <!--<td><input name="c_id" type="text" class="form-control"  data-error="Enter ID" /></td>-->
                        <td><input name="sname" type="text" class="form-control" required="required" data-error="Please enter destination" /></td>
                           <td><input type="text" name="dname" class="form-control"  required="required" data-error="Please enter destination"></td><br>
                             <td><input type="submit" name="submit" class="btn btn-success btn-send" value="Search"></td>      
					</form>
				</tr>
			</tbody>
		</table>    
<div class="ok" >
<?php

$link = mysqli_connect("localhost","root","root","BMRCL_Data");
$sql = "SELECT * FROM display_status";
$result = mysqli_query($link, $sql);
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
if (mysqli_num_rows($result) > 0) {
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
    echo "</table>";
}

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
</body>
</html>