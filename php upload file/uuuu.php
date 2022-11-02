<?php
include_once 'database.php';
include("developers.php");
if(count($_POST)>0) {		
mysqli_query($conn,"UPDATE owners set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', phone='" . $_POST['phone'] .  "' ,password='" . $_POST['password'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM owners WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
First Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Last Name :<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
password:<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>