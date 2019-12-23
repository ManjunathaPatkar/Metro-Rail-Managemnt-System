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
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Sign Up request</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Smart card login</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="trainsandtimings.php">Trains and Timings</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="a.php">Routs and Stations</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="https://en.wikipedia.org/wiki/Namma_Metro">Explore </a>
      <a class="nav-item nav-link" style="font-size: 20px" href="contact_us.html">Contact us</a>
    
    </div>
  </div>
</nav>

				<div class="navbar-right margins">
					<a href="home.html" class="btn btn-info btn-lg">
						<span class="glyphicon glyphicon-log-out"></span> Log out
					</a>
				</div>


		
			

	<!--<?php

	//$admins = mysqli_query($con,"SELECT Admin_ID,Admin_Name,Age,Sex,Email FROM admin WHERE 1");

	?>
-->

	<!--<div class="container">

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Admin ID</th>
					<th>Admin Name</th>
					<th>Age</th>
					<th>Sex</th>
					<th>Email</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>-->
			<!--	<?php
			/*	while ($row = mysqli_fetch_assoc($admins))
				{
					echo '<tr>';
					foreach ($row as $key => $value) {
						echo '<td>',$value,'</td>';
					}
					echo "<td><a href='php/delete_admins.php?id=".$row['Admin_ID']."'><button type=\"button\" class=\"btn btn-link\">Delete</button></a></td>";
					echo '</tr>';
				}*/
				?>
			</tbody>
		</table>
	</div>-->
	<div class="container">
		<h2>Add New Admins</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
				    <th>Admin Id</th>
					<th>Admin Name</th>
					<th>Age</th>
					<th>Sex</th>
					<th>Email</th>
					<th>Password</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<form action="adminmanageadmins.php" method="POST">
					    <td><input name="a_id" type="text" class="form-control" required="required" data-error="Enter ID" /></td>
						<td><input name="a_name" type="text" class="form-control" required="required" data-error="Enter name" /></td>
						<td><input name="a_age" type="number" class="form-control" required="required" data-error="enter valid age"/></td>
						<td><input name="a_sex" type="text" class="form-control" required="required" data-error="Enter valid gender M,F,Male,Female "/></td>
						<td><input name="a_email" type="email" class="form-control" required="required" data-error="valid email is required"/></td>
						<td><input name="a_pass" type="password" class="form-control" required="required" data-error="enter valid password"/></td>
						<td><input type="submit" name="submit" class="btn btn-link" value="Add" /></td>
					</form>
				</tr>
			</tbody>
		</table>
	</div>
	
	<!--<div style="margin-left: 9em; margin-right: 50em;">
		<p class="bg-danger">  -->
			<?php

$link = mysqli_connect("localhost","root","root","BMRCL_Data");
         if(isset($_POST["submit"]))
  {
    $id = $_POST[a_id];
   // $id1 = strtoupper($usn);
	$aname = $_POST[a_name];
	$age = $_POST[a_age];
	$sex = $_POST[a_sex];
	$email = $_POST[a_email];
	$pass = $_POST[a_pass];
  
  

	if($age<18)
	{
	?>
	 <div class="alert alert-danger col-lg-6 col-lg-push-3">
          <strong style="color:white">Admin age<?php echo " ";echo $age ?></strong> is less than 18.
      </div>
      <?php
	}
    //require ""
	 $query = "select * from ADMIN where Admin_Id='$id';";

	$result = mysqli_query($link,$query);

	$count = 0;
	$count = mysqli_num_rows($result);

	if($count!=0)
	{
	?>
	 <div class="alert alert-danger col-lg-6 col-lg-push-3">
          <strong style="color:white">Admin Id<?php echo " ";echo $id ?></strong> already exists.
      </div>
      <?php
	}
	
    $sql_query = "insert into ADMIN values('$id','$aname','$age','$sex','$email','$pass'); ";
    $result = mysqli_query($link,$sql_query);

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