<?php

//require "../inc/db_connect.php";
//include dirname(__FILE__) . '/my_file.php';
require dirname(__FILE__) . "/../inc/db_connect.php";
$name  = $_POST["name"];
///$email = $_POST["email"];

is_string($name)
or  die("Only string input allowed");

	

///is_string($email)
///or   die("Only string input allowed");



$response = array();
///$sql = "INSERT INTO people (name, email) VALUES ('$name', '$email')";
$sql = "INSERT INTO people (name) VALUES ('$name')";
$sql2 = "SELECT * FROM  people WHERE id = ( SELECT MAX(id) FROM people )";
//$result = $con->query($sql);



//if(is_string($name) && is_string($email){

$result = mysqli_query($con, $sql);
//$result2 = mysqli_query($con, $sql2);
if($result == TRUE){
  $result2 = mysqli_query($con, $sql2); 

  $row = mysqli_fetch_assoc($result2);
  $response["id"] = $row["id"];
  $response["name"] = $row["name"];
///  $response["email"] = $row["email"];

//  $response2 = ["id" => "$id", "name" => $name, "email" => $email];
  header('Content-Type: application/json'); 
  echo json_encode($response);
	
  // echo "New Record Created Succesfully ";
}else {
  echo "Error". $sql . "<br>". $con->error;
}
$con->close();

//}

?>
