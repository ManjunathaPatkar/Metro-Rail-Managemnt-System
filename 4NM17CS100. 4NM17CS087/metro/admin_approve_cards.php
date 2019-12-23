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
      <a class="navbar-brand" style="font-size: 25px"href="home.html">Metro Rail management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-item nav-link active" style="font-size: 20px"href="#">Admin login <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Sign up request</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Smart card login</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="trainsandtimings.php">Trains and Timings</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="a.php">Routes and Stations</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="https://en.wikipedia.org/wiki/Namma_Metro">Explore</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="contact_us.html">Contact us</a>
    
    </div>
  </div>
</nav>

	<div id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid bg-color">
			
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="nav navbar-nav">
					<li><a href="HomePage.html">Home</a></li>
					<li class="active"><a href="#"></a></li>
				</ul>
				<div class="navbar-right margins">
					<a href="home.html" class="btn btn-info btn-lg">
						<span class="glyphicon glyphicon-log-out"></span> Log out
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<form name='status-updates' method='post' action='admin_approve_cards.php'>
			<input type='hidden' name='id' />
			<input type='hidden' name='new_status' />

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Customer Username</th>
						<th>Smart Card Number</th>
						<th>Balance</th>
						
					</tr>
				</thead>
				<form action="adminmanageadmins.php" method="POST">
					<input type="submit" name="submit" class="btn btn-link" value="Get"/>
			
		</form>
	</div>
	<div class="m" style="text-align: center;color: green;text;font-size: 2em;padding-left:10px;"
	<?php
	$link = mysqli_connect("localhost","root","root","BMRCL_Data");
         if(isset($_POST["submit"]))
  {
    

    //require ""

	$sql_query = "select Username,Card_No,Balance from SMARTCARD";
	$result = mysqli_query($link,$sql_query);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     echo "<tr height=20";
     echo "<td>"."</td>";
		echo "<td>" . $row['Username']."</td>";
		echo "<td>".$row['Card_No']."</td>";
    echo "<td>".$row['Balance']."</td>"."<br>";
      echo "</tr>";

    }
    echo "</table>";
}

    //$count = 0;
    /*$count = mysqli_num_rows($result);

    if($count == 0)
    {
      ?>
      <div class="alert alert-danger col-lg-6 col-lg-push-3">
          <strong style="color:white">Invalid</strong> Username Or Password.
      </div>
      <?php
    }
    else
    {
      ?>
      <script type="text/javascript">
        window.location = "welocmeuser.php";
      </script>
      <?php
    }*/

  }
 ?>




</body>
</html>