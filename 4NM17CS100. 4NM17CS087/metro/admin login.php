<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="adminloginstyle.css">
 
</head>
<body class="adminlogin">

<h2>Admin Login Form</h2>



<div id="id01" class="modal">
  
  <form class="formc"class="modal-content animate"  method="post">
    

    <div class="container">
      <label for="uname"><b>Username:&nbsp;</b></label>
      <input type="text" placeholder="Enter Username" name="uname" style="font-size: 40px" required><br>

      <label for="psw"><b> Password: &nbsp;</b></label>
      <input type="password" placeholder="Enter Password" name="psw" style="font-size:40px " required><br><br>
     
      <button type="submit" style="font-size: 49px" name="logina" style="background-color:rgba(0,0,255,0.2);">Login</button>
      
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

  if(isset($_POST["logina"]))
  {
  
    $id = $_POST[uname];
   // $id1 = strtoupper($usn);
    $password = $_POST[psw];

    
    $sql_query = "select * from admin where Email = '$id' && Passworda= '$password'; ";
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
        window.location = "adminhomepage.php?var=<?php echo $id?>";
        // window.location = "welocmeuser.php?var=<echo $id?>";
      </script>
      <?php
    }

  }
 ?>

 
</body>
</html>