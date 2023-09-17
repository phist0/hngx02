<?php

//include "../inc/db_connect.php";
require dirname(__FILE__) . "/../inc/db_connect.php";

parse_str(file_get_contents("php://input"),$post_vars);
//    echo $post_vars['fruit']." is the fruit\n";
//    echo "I want ".$post_vars['quantity']." of them\n\n";


$name  = $post_vars["name"];
//$email  = $post_vars["email"];
//$name  = $_POST["name"];
//$email = $_POST["email"];
if($con){
//  $sql = "UPDATE  people SET name = '$name', email = '$email' WHERE id = '$id'";
  $sql = "UPDATE  people SET name = '$name' WHERE id = '$id'";
//$result = $con->query(sql);  
  $result =   mysqli_query($con, $sql);
  if($result == TRUE){
///    $response2 = ["id" => "$id", "name" => $name, "email" => $email];
    $response2 = ["id" => "$id", "name" => $name];
    header('Content-Type: application/json');
    echo json_encode($response2);

  // echo "New Record Updated Succesfully ";
  }else {
    echo "Error". $sql . "<br>". $con->error;
  }
} 
$con->close();


