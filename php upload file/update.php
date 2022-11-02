<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM owners");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>Sl No</td>
		<td> Name</td>
		<td> phone</td>
		<td>email</td>
		<td>count_hose</td>
        <td>password</td>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["count_hose"]; ?>
        <td><?php echo $row["password"]; ?></td></td>
		<td><a href="update_owner.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>

