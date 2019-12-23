<!DOCTYPE html>
<html>
<head>
	<title>Metro management system</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="button.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body >
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    

     <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Metro Rail management</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
   	  <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Admin login <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Smart card request</a>
      <a class="nav-item nav-link" href="#">Smart card login</a>
      <a class="nav-item nav-link" href="#">Trains and Timings</a>
      <a class="nav-item nav-link" href="#">Routs and Stations</a>
      <a class="nav-item nav-link" href="#">Explore kudla</a>
      <a class="nav-item nav-link" href="#">Contact us</a>
    
    </div>
  </div>
</nav>

<div class="mbuttons">

 
  <ul>
		<marquee><font size="13" color="white" class="man" random="23"><b>Welcome to Kudla Metro</b></font></marquee>
		<marquee direction="up" scrollamount="3" >
        <font color="white" size="6"><b>Kudla Metro Rail Corporation Limited (KUDLA-METRO), is a 50:50 jointly owned company of Government of India and Government of Karnataka.</b></font>
	    </marquee>
		<script type="text/javascript" src="sriptDOM.js"></script>
	</ul>
   </div>
   <h3>All metro rail projects will be covered under the legal framework of the Metro Railways (Construction of Works) Act, 1978; the Metro Railways (Operation and Maintenance) Act, 2002; and the Railways Act, 1989, as amended from time to time.</h3>
   <?php
$link = mysqli_connect("localhost","root","root","MMRS_Data");
$query = "insert into mother values(1);";
$result = mysqli_execute($link,$query);
echo $result

 ?>
   <input type="text" name="manu">
   <input type="submit" name="okay">







   
</body>
</html>
