<?php
 
include("connection.php");
$table_name = "contact";

$sql = "insert into $table_name(name_tbl, email_tbl, subject_tbl, comment_tbl) VALUES ('$_POST[Name]','$_POST[Email]','$_POST[Subject]','$_POST[Comment]')";

mysqli_query($connection, $sql) or die(mysqli_error());

echo "<script>
	window.location = 'contact.html';
	</script>";
?>



<!DOCTYPE html>
<html>
<title>Architect - Contact Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.html" class="w3-bar-item w3-button"><b>BR</b> Architects</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="project.html" class="w3-bar-item w3-button">Projects</a>
      <a href="about.html" class="w3-bar-item w3-button">About</a>
      <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

    <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form>
      <input class="w3-input w3-border" type="text" placeholder="Please fill in your name here" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
      
      <button class="w3-button w3-black w3-section" type="reset">
        <i class="fa fa-paper-plane"></i> CLEAR
      </button>
    </form>
    
        
  </div>
  
<!-- Image of location/map -->
<div class="w3-container">
  <img src="images/map.jpg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>



</body>
</html>

