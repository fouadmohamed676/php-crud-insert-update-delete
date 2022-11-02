<?php
session_start();
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "house";
$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$strSQL = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($objCon,$_POST['email'])."'
and Password = '".mysqli_real_escape_string($objCon,$_POST['password'])."'";

$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

if(!$objResult)
{
echo "Email and Password Incorrect!";
}
else
{
$_SESSION["UserID"] = $objResult["UserID"];

$_SESSION["Status"] = $objResult["Status"];

session_write_close();

 

if($objResult["Status"] == "ADMIN")

{

header("location:owners.php");

}

else

{

header("location:owners.php");

}

}

mysqli_close($objCon);

?>