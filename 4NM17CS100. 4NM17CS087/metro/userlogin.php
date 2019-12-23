<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="userloginstyle.css">

</head>
<body class="adminlogin">

<h2>Smart card Login Form</h2>


<div >
  
  <form class="formc" method="post">
    

    <div >
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" style="font-size: 34px" required><br>

      <label for="psw"><b> Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" style="font-size:34px " required><br><br>
        
      <button type="submit" style="font-size: 45px"name="loginu">Login</button>
      
    </div>

     <br>
      <a href="home.html" style="color:black;">Cancel</a>
      
  </form>
</div>
</div>
<?php
$link = mysqli_connect("localhost","root","root","BMRCL_Data");
/*$sql = "SELECT * FROM admin;";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "admin id: " . $row["Admin_Id"]. " - Name: " . $row["Admin_Name"]. " " . $row["Email"]. "<br>";
    }*/

  if(isset($_POST["loginu"]))
  {
    $id = $_POST[uname];
   // $id1 = strtoupper($usn);
    $password = $_POST[psw];
   $a=$id;
    //require ""

    $sql_query = "select * from customer where Username = '$id' && Passwordc = '$password'; ";
    $result = mysqli_query($link,$sql_query);

    $count = 0;
    $count = mysqli_num_rows($result);

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
        window.location = "welocmeuser.php?var=<?php echo $id?>";
      </script>
      <?php //echo $id;
    }

  }
 ?>
 

</body>
</html>