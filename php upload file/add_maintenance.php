<?php 
include "db_conn.php";
include_once 'database.php';
include("developers.php");


if (isset($_POST['submit'])&& isset($_FILES['my_image'])) {

	
	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";
   								 	
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];	
	$id = $_POST['id'];
    $date_m = $_POST['date_m'];
	$type = $_POST['type'];
	$bill = $_POST['bill'];
	$cost = $_POST['cost'];
	$rental_id = $_POST['rental_id'];


	
	if ($error === 0) {
		if ($img_size > 999000) {
			$em = "Sorry, your file is too large.";
			header("Location: maintenance_flag.php?id=$rental_id");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","pdf"); 
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                $sql = mysqli_query($conn, "INSERT INTO `maintenance_flag` (`date_m`, `type`,`bill`,`cost`,`rental_id`)
				
            VALUES ('$date_m', '$type','$new_img_name','$cost','$rental_id');") or die(mysqli_error($conn));
				mysqli_query($conn, $sql);
				header("Location: maintenance_agar.php?id=$rental_id");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: agar.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: agar.php?error=$em");
	}

}else {
	header("Location: maintenance_flag.php?id=$rental_id");
}



?>