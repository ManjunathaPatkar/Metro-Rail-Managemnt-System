<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="smartcardrequestsyle.css">
        
		<title> Smart card request</title>
	<!--	<style type="text/css">
         .form {
		margin: 0 auto;
		width: 2100px;
	}
	.form label{
		display: inline-block;
		text-align: right;
		float: left;
	}
	.form input{
		display: inline-block;
		text-align: left;
		float: right;
	}
		</style>-->


</head>

<body class="smart">



	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/bootstrap.js"></script>


	

	<h2 class="padding">Sign Up Page</h2>
	<div id="form">
	
				<form id="contact-form" method="post" action="smart_card_request_page.php">

					
									<label>Firstname *</label>
									<input type="text" name="fname"  placeholder="Enter your firstname" style="font-size: 20px"required="required" data-error="Firstname is required.">
								<br>
									<label>Lastname * </label>
									<input type="text" style="font-size: 20px"name="lname"  placeholder="Enter your lastname" required="required" data-error="Lastname is required.">
								<br>
									<label>Email *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input type="email" name="email"style="font-size: 20px" class="form-control" placeholder="Enter your email" required="required" data-error="Valid email is required.">
									<br>
									<label>Phone *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input type="tel" name="phone"style="font-size: 20px"style="font-size: 20px" class="form-control" placeholder="Enter your phone" required>
								<br>
									<label>Username *</label>
									<input type="text" style="font-size: 20px"name="username" class="form-control" placeholder="Please enter username" required="required" data-error="Valid username is required.">
									<br>
									<label>Password *</label>
									<input type="password"style="font-size: 20px" name="password" class="form-control" placeholder="Please enter password" required="required" data-error="Enter valid password">
								<br><br>
									<label>Address * &nbsp; &nbsp; </label>
									<textarea name="address" class="form-control" placeholder="Smart Card will be delivered to this address" rows="4" required="required" data-error="Please,enter your address" style="font-size: 20px"></textarea>
								<br>
								<input type="submit" name="submit" class="btn btn-success btn-send" value="&nbsp;&nbsp;&nbsp;Sign Up &nbsp;&nbsp;&nbsp;" style="font-size: 49px" >
					<br>
								<p class="text-muted"><strong>*</strong> These fields are required.</p>
						
	</div>



	<?php

	$link = mysqli_connect("localhost","root","root","BMRCL_Data");
         if(isset($_POST["submit"]))
  {
    $fname = $_POST[fname];
   // $id1 = strtoupper($usn);
	$lname = $_POST[lname];
	$mail = $_POST[email];
	$phone = $_POST[phone];
	$uname = $_POST[username];
	$pass = $_POST[password];
	$addr = $_POST[address];

    //require ""
    $query = "select * from CUSTOMER where Username='$uname';";

	$result = mysqli_query($link,$query);

	$count = 0;
	$count = mysqli_num_rows($result);

	if($count!=0)
	{
	?>
	 <div class="alert alert-danger col-lg-6 col-lg-push-3">
          <strong style="color:white">Username<?php echo " ";echo $uname ?></strong> already exists.
      </div>
      <?php
	}



    $sql_query = "insert into customer values('$uname','$fname','$lname','$addr','$phone','$pass'); ";
    $result = mysqli_query($link,$sql_query);

  }
	?>
</body>
</html>