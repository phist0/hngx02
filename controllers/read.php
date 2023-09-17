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
//  $sql = "SELECT * FROM  people WHERE id = '$id'" ;
  $sql = "SELECT * FROM  people WHERE id = '$int_id'" ;
  $result = mysqli_query($con, $sql);
//  echo [$result];
  if($result){
    $result2 = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result2);
    $response["id"] = $row["id"];
    $response["name"] = $row["name"];
    $response["email"] = $row["email"];

  //  header('Content-Type: application/json');
  //  echo json_encode($response, JSON_PRETTY_PRINT);
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

	
  // echo " Record Read Succesfully ";
$con->close();

