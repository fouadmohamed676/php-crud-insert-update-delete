<?php
include("database.php");
$db= $conn;
$tableName="owners";
$tableName_user="users";
$column_users= ['name','UserID'];
$columns= ['id', 'name','card','email','phone','count_hose','password'];
$fetchData = fetch_data($db, $tableName, $columns);
$userData = userData($db, $tableName_user, $column_users);
function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}

function userData($db, $tableName_user, $column_users){
   if(empty($db)){
    $msg= "Database connection error";
   }elseif (empty($column_users) || !is_array($column_users)) {
    $msg="column_users Name must be defined in an indexed array";
   }elseif(empty($tableName_user)){
     $msg= "Table Name is empty";
  }else{
  
  $column_users = implode(", ", $column_users);
  $query = "SELECT ".$column_users." FROM $tableName_user";
  $result = $db->query($query);
  
  if($result== true){ 
   if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $msg= $row;
   } else {
      $msg= "No Data Found"; 
   }
  }else{
    $msg= mysqli_error($db);
  }
  }
  return $msg;
  }
?>