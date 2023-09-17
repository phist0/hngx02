<?php

//include "../inc/db_connect.php";
require dirname(__FILE__) . "/../inc/db_connect.php";

//$name  = $_POST["name"];
//$email = $_POST["email"];

// $sql = "SELECT * FROM  'people' WHERE 'id' = '$id'" ;
// $result = $con->query($sql);


$int_id = (int) $id;
$response = array();
if($con){
	//  $sql = "SELECT * FROM people";
  $sql = "DELETE FROM  people WHERE id = '$id'" ;
  $sql2 = "SELECT * FROM  people WHERE id = '$id'" ;
  $result = mysqli_query($con, $sql2);
  if($result){
    $result2 = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $response["id"] = $row["id"];
    $response["name"] = $row["name"];
    $response["email"] = $row["email"];
/*
    $x = 0;
    while($row = mysql_fetch_assoc($result)){
      $response[$x]["id"] = $row["id"];
      $response[$x]["name"] = $row["name"];
      $response[$x]["email"] = $row["email"];
      $x++; 
 */
  }
  if($response["id"]){
  header('Content-Type: application/json');
  echo json_encode($response, JSON_PRETTY_PRINT);
  }
} else {
  echo "Database Connection Failed ";

}

	
  // echo "Record Deleted  Succesfully ";
$con->close();

