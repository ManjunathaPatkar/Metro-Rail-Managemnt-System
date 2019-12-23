
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="button.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title> Metro Online Management</title>
</head>

<body>
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
      <a class="nav-item nav-link active" style="font-size: 20px"href="#">Admin login <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Smart card request</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Smart card login</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="trainsandtimings.php">Trains and Timings</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="a.php">Routs and Stations</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="https://en.wikipedia.org/wiki/Namma_Metro">Explore</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="contact_us.html">Contact us</a>
    
    </div>
  </div>
</nav>

				<div class="navbar-right margins">
					<a href="home.html" class="btn btn-info btn-lg">
						<span class="glyphicon glyphicon-log-out"></span> Log out
					</a>
				</div>
			<div class="modal fade" id="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Enter Reply Message</h4>
				</div>
				<div class="modal-body">

					<form id="updateValues" action="adminreplycomplaints.php" method="POST" class="form">
						<div class="form-group">
							<label for="name">Reply</label>
							<textarea type="text" class="form-control" name="reply_msg" id="frm_name"></textarea>
						</div>

						<input type="hidden" id="comp_id" name="comp_id">
						<input type="submit" class="btn btn-primary btn-custom" value="Reply">
					</form>

				</div>


			</div>
		</div>
	</div>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Complaint ID</th>
						<th>Complaint subject</th>
						<th>Complaint description</th>
						<th>Username</th>
						
					</tr>
				</thead>
	<?php
$link = mysqli_connect("localhost","root","root","BMRCL_Data");
$sql = "SELECT * FROM COMPLAINT";
$result = mysqli_query($link, $sql);
echo "<h1><strong>COMPLAINTS</strong></h1>"."<br>";
//echo "<h2>Green line</h2><br>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr height=20";
		echo "<td>"."</td>";
		echo "<td>".$row["Comp_Id"]."</td>";
		echo "<td>".$row["Comp_Subject"]."</td>";
		echo "<td>".$row["Comp_Desc"]."</td>";
		echo "<td>".$row["Username"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
//echo "<h1><strong>COMPLAINTS</strong></h1>"."<br>";
?>
	
</body>
</html>