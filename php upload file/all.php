<?php
 require_once"db_conn.php";
$sql="SELECT * FROM owners;";
$stmt= mysqli_query($conn,$sql);
if ($stmt) {
	echo $sql;
  while ($row=mysqli_fetch_array($stmt)) {
 	$communicates[]=$row;
}
print "".json_encode($communicates,JSON_UNESCAPED_UNICODE). "";
}

?>