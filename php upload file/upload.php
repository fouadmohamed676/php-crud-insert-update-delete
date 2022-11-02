<?php 

//if (isset($_POST['submit'])) {
	include "db_conn.php";

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password_n = $_POST['password_n'];
				// Insert into Database
				$sql = mysqli_query($conn, "INSERT INTO `owners` (`id`, `name`, `email`, `phone`,`password`) 
    VALUES ('', '$name', '$email', '$phone','$password_n');") or die(mysqli_error($conn));

				mysqli_query($conn, $sql);
		
				if($sql){
					header("Location: add_owner.php");
				}else{
					echo"errror";
				}

		
?>