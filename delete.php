<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete</title>
</head>

<body>
<?php
//create connection

include("connection.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table (use id from the table)
$result=mysqli_query($connection,"DELETE FROM contact where contact_id='$id'");

//redirecting to the display page (viewdb.php in our case)
header("Location:viewdb.php");

?>
</body>
</html>