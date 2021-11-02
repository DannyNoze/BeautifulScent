<!DOCTYPE html>
<html>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.html" class="w3-bar-item w3-button"> BeautifulScent</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
       <a href="logout.php" class="w3-bar-item w3-button">LOGOUT</a>
    </div>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

    <!-- View Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">View Page | ADMIN ONLY</h3>
    <p>List of client messages</p>
    <?php

		include("connection.php");
		
		//fetching data 
		$result=mysqli_query($connection,"SELECT * FROM contact");
		
		echo "<table class = 'tblview' align = 'center' width='100%' border=1 style='border-collapse:collapse;'>";
		echo "<tr bgcolor='#CCCCCC' align='center'>";
		echo "<td style='padding:1%;'>Name</td>";
		echo "<td style='padding:1%;'>Email</td>";
		echo "<td style='padding:1%;'>Subject</td>";
		echo "<td style='padding:1%;'>Comment</td>";
		echo "<td style='padding:1%;'>Action</td>";
		echo "</tr>";
		
		while($res=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td style='padding:1%;'>".$res['name_tbl']."</td>";
			echo "<td style='padding:1%;'>".$res['email_tbl']."</td>";
			echo "<td style='padding:1%;'>".$res['subject_tbl']."</td>";
			echo "<td style='padding:1%;'>".$res['comment_tbl']."</td>";
			echo "<td align='center'><a href='edit.php?id=$res[contact_id]'>Edit</a> | <a href='delete.php?id=$res[contact_id]' onClick='return confirm(\"Are you sure you want to delete?\")'>Delete</a></td></tr>"; 
		}
		echo "</table>";
		?>
		<br><br><br><br><br>

  </div>
  
<!-- End page content -->
</div>



</body>
</html>
