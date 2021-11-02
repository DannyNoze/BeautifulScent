<!DOCTYPE html>
<html>
<title>edit page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <span class="w3-bar-item w3-button2"> BeautifulScent</span>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
       <a href="viewdb.php" class="w3-bar-item w3-button">VIEW MESSAGES</a>
       <a href="logout.php" class="w3-bar-item w3-button">LOGOUT</a>
    </div>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

 
  <!-- edit Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Edit - Admin ONLY</h3>
    <p>Click submit after edit the page</p>
<?php
 
include("connection.php");

if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$email=$_POST['Email'];
$subject=$_POST['Subject'];
$comment=$_POST['Comment'];
 
$query3=mysqli_query($connection,"update contact set name_tbl='$name', email_tbl='$email', subject_tbl='$subject', comment_tbl='$comment' where contact_id='$id'");
if($query3)
{
header('location:viewdb.php');
}
}
$query1=mysqli_query($connection,"select * from contact where contact_id='$id'");
$query2=mysqli_fetch_array($query1);
?>

 <form method="post">
      <input class="w3-input w3-border" type="text" placeholder="Please fill in your name here" required name="Name" value = "<?php echo $query2['name_tbl']; ?>">
      
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email" value = "<?php echo $query2['email_tbl']; ?>">
      
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject" value = "<?php echo $query2['subject_tbl']; ?>">
      
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment" value = "<?php echo $query2['comment_tbl']; ?>">
      
      <button class="w3-button w3-black w3-section" type="submit" name="submit">
        <i class="fa fa-paper-plane"></i> UPDATE
      </button>
      
      <button class="w3-button w3-black w3-section" type="reset">
        <i class="fa fa-paper-plane"></i> CLEAR
      </button>
    </form>
 
 <?php
}
?>   

</div>
  


<!-- End page content -->
</div>


</body>
</html>
