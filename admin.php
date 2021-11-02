<!DOCTYPE html>
<html>
<title>Login Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="form.css">
<body>

<div class="container11">
		<span class="idk" ><img src="tok.png" alt="Flowers in Chania" height="70px" width="260px"></span>
		<div class="container2">
		<li><a href="homepage.html" class="cool-link"> HOME</a></li>
		<li><a href="storepage.html" class="cool-link"> STORE</a></li>
		<li><a href="about.html" class="cool-link"> ABOUT US</a></li>
		<li><a href="contact.html" class="cool-link"> CONTACT US</a></li>
		<li><a href="admin.php" class="cool-link"> ADMIN</a></li>
	</div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:600px">

    <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Login Page</h3>
    <p>ADMIN can view, edit and delete record</p>
   <form method="post">
 
  <div class="container" style="width:100%; float:left;background-color:#f1f1f1">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name = "submit">Login</button>
    <button type="reset" style="background-color:#F00">Cancel</button>
  </div>
</form>
<?php
	
    if (isset($_POST['submit']))
        {     
   include("connection.php");
	$table_name = "admin";
  
    session_start();
    $username=$_POST['uname'];
    $password=$_POST['psw'];
    $_SESSION['login_user']=$username; 
    $query = mysqli_query($connection,"SELECT username FROM $table_name WHERE username='$username' and password='$password'");
	$num_row = mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
     if ( $num_row != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='viewdb.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>
  
  </div>
  </div>
<!-- End page content -->
</div>


</body>
</html>
