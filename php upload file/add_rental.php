<?php 
include "db_conn.php";
include_once 'database.php';
include("developers.php");
// echo $_GET[$id];

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];


    $rental_name = $_POST['rental_name'];
	$rental_phone = $_POST['rental_phone'];
	$total_rent = $_POST['total_rent'];
	$rent_insurance = $_POST['rent_insurance'];
	$elctri_bill = $_POST['elctri_bill'];
	$water_bill = $_POST['water_bill'];
	$contrect_url = $_POST['contrect_url'];
	$pay_date = $_POST['pay_date'];
	$rental_id_card = $_POST['rental_id_card'];
	$contract_date = $_POST['contract_date'];
	$kind_pay = $_POST['kind_pay'];
	$pay_value = $_POST['pay_value'];
	$contract_period = $_POST['contract_period'];
	$aqar_id = $_POST['aqar_id'];
	$elctri_no = $_POST['elctri_no'];
	

	if ($error === 0) {
		if ($img_size > 999000) {
			$em = "Sorry, your file is too large.";
		    header("Location: indexx.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","pdf"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                $sql = mysqli_query($conn, "INSERT INTO `rental` (`rental_name`, `rental_phone`,
                `total_rent`, `rent_insurance`,`elctri_bill`,
               `water_bill`,`pay_date`,`rental_id_card`,
               `contract_date`,`kind_pay`,`pay_value`,`contract_period`,`aqar_id`,`contrect_url`,`elctri_no`) 
			  
            VALUES ('$rental_name', '$rental_phone','$total_rent', '$rent_insurance','$elctri_bill','$water_bill','$pay_date','$rental_id_card','$contract_date','$kind_pay',
            '$pay_value','$contract_period','$aqar_id','$new_img_name','$elctri_no');") or die(mysqli_error($conn));
            mysqli_query($conn, $sql);
			header("Location: rental_id.php?id=$aqar_id");
				// header("Location: rental.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: rental.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: rental.php?error=$em");
	}

}else {
	header("Location: rental.php");
}


?>