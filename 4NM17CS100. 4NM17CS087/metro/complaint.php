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


     <li><a href="welocmeuser.php"><h2>Smart Card</a></h2></a></li>
                <div class="navbar-right margins">
                    <a href="home.html" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </div>
        

	            <table class="table table-bordered">
			<thead>
                		<h2>Add Complaints</h2>
				<tr>
				    <!--<th>Complaint Id</th>-->
                    <th>User Name</th>
                    <th>Subject</th>
                    <th>Description</th>       
                    <th>Send</td>          
				</tr>
			</thead>
			<tbody>
				<tr>
					<form action="complaint.php" method="POST">
					    <!--<td><input name="c_id" type="text" class="form-control"  data-error="Enter ID" /></td>-->
                        <td><input name="u_name" type="text" class="form-control" required="required" data-error="Enter name" /></td>
                           <td><input type="text" name="subject" class="form-control" placeholder="Please enter the subject" required="required" data-error="Please enter subject"></td><br>
                            <td><textarea name="message" class="form-control" placeholder="Type your complaint" rows="4" required="required"></textarea></td><br>
                             <td><input type="submit" name="submit" class="btn btn-success btn-send" value="Send Complaint"></td>      
					</form>
				</tr>
			</tbody>
		</table>    
                 
               
<?php 

$link = mysqli_connect("localhost","root","root","BMRCL_Data");
         if(isset($_POST["submit"]))
  {
     
   // $cid = $_POST[c_id];
   // $id1 = strtoupper($usn);
	$uname = $_POST[u_name];
	$sub = $_POST[subject];
    $dec = $_POST[message];
    $rep="Not_Replied";
    /*echo $rep;
    echo $cid;
    echo $sub;
    echo $dec;*/
    $sql_query = "insert into complaint (Comp_Subject,Comp_Desc,Comp_Status,Username) values ('$sub','$dec','$rep','$uname'); ";
    $result = mysqli_query($link,$sql_query);

   

  }
 ?>

       



</body>
</html>