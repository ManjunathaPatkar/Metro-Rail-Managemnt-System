
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="button.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
       

        <title> Metro Online Management</title>
        <style >
     .l
     {
         text-align:center;
        color:rgba(0,0,255,0.4);

     }
      
    </style>

</head>

<body>
 <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>
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
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Smart card request</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Smart card login</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="trainsandtimings.php">Trains and Timings</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="a.php">Routs and Stations</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="https://en.wikipedia.org/wiki/Namma_Metro">Explore</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="contact_us.html">Contact us</a>
     
    </div>
  </div>
</nav>
<?php
$link = mysqli_connect("localhost","root","root","BMRCL_Data");
//include 'userlogin.php';
 //global $var1;
 global $var1;
  $var1 = $_GET['var'];
 ?> <div class="l"><?php
echo  "<h1>WELCOME</h1>"."<h1>".$var1;"</h1>";
//$r=10; ?>
</div>
<?php 
$q="select * from SMARTCARD where Username='$var1';";
$result = mysqli_query($link, $q);
$row = mysqli_fetch_assoc($result);
//echo "".$row["Card_No"]."";
$b=$row["Balance"];
       if(isset($_POST["submit"]))
  {
       //$var1 = $_GET['var'];
    $bal = $_POST[amount];
   // echo "Balance:".$bal;
    //global $var1;
    $a = $_POST[p];
   // echo "name:".$a;
    $b=$_POST[w];
   // echo $b;
    $bal=$bal+$b;
    //echo $bal;
    $sql_query = "update SMARTCARD set Balance='$bal' where Username='$a';";
    $result = mysqli_query($link,$sql_query);
    //echo "ho";
  }
?>
<center>
  <li> <a href="complaint.php"><h2>Complaint</h2></a></li>

                <div class="navbar-right margins">
                    <a href="home.html" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </div>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
        
                 <li> <a href="complaint.php">Complaint</a></li>
             </ul>
            
      </div>
  </div>
</div>
</center>
<center>
<div class="container">

    <div class="col-md-10">
        <h4>Card Number : <?php echo $row['Card_No']; ?> </h4>

    </div>

    <div class="col-md-12">
        <h4>Name : <?php echo $row['Username'];?> </h4>
    </div>
    <div class="col-md-12">
        <h4>Card Status : <?php echo $row['Card_Status']; ?> </h4>
    </div>

    <div class="col-md-12">
        <h4>Balance : <?php echo $row['Balance']; ?> </h4>
    </div>
</div>


<div class = "container top_padding">
    <form action="welocmeuser.php" method="POST">
        <div class="col-md-6">
            <div class="form-group">
                <label>Recharge Amount</label>
                <input type="number" name="amount" class="form-control" placeholder="Please enter amount">
               <input type="hidden" name="p" value= "<?=$var1;?>" class="form-control">
               <input type="hidden" name="w" value= "<?=$b;?>" class="form-control">
                <div class="help-block with-errors"></div>
                
            </div>
        </div>
        <div class="col-md-12">
            <input type="submit" name="submit" class="btn btn-success btn-send" value="Recharge">
        </div>

    </form>

</div>
</center>
<?php
//$link = mysqli_connect("localhost","root","root","BMRCL_Data");
  /*       if(isset($_POST["submit"]))
  {
    $bal = $_POST[amount];
    echo $bal;
    echo $var1;
    $sql_query = "update SMARTCARD set Balance='$bal' where Username='$var1';";
    $result = mysqli_query($link,$sql_query);
  }*/
?>




</footer>
</body>
</html>