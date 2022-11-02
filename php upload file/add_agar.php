<?php 
include "db_conn.php";
include_once 'database.php';
include("developers.php");

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	
	
	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";
   								 	
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];	

	$id = $_POST['id'];
    $area = $_POST['area'];
	$code = $_POST['code'];
	$units = $_POST['units'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$halls = $_POST['halls'];
	$owner_id = $_POST['owner_id'];
	$contract = $_POST['contract'];


	if ($error === 0) {
		if ($img_size > 999000) {
			$em = "Sorry, your file is too large.";
		    header("Location: agar.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","pdf"); 
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

                
                $sql = mysqli_query($conn, "INSERT INTO `aqar` (`area`, `code`,`units`,`name`,`type`,`halls`,`owner_id`,`contract`)
				
            VALUES ('$area', '$code','$units','$name','$type','$halls','$owner_id','$new_img_name');") or die(mysqli_error($conn));
				mysqli_query($conn, $sql);
		
				
				header("Location: agar_owner.php?id=$owner_id");
				
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
header("Location: agar_owner.php?id=$id");
}


?>