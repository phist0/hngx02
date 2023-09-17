<?php

$servername = "localhost";
$username   = "api_02_user";
$password   = "peiZoh0a";
$dbname     = "api_02_db";



// $con = mysqli_connect("api-02-db-server.mysql.database.azure.com", "root", "api-02-database",)
// $con = mysqli_connect("localhost", "api_02_user", "api-02-database",);
$con = new  mysqli($servername, $username,$password, $dbname);

if($con->connect_error){
  die("Connection Failed".$con->connect_error);

}
/*
$response = array();
if($con){
  $sql = "SELECT * FROM people";
  $result = mysql_query($con, $sql);
  if($result){
    $x = 0;
    while($row = mysql_fetch_assoc($result)){
      $response[$x]["id"] = $row["id"];
      $response[$x]["name"] = $row["name"];
      $response[$x]["email"] = $row["email"];
      $x++;
    }
    echo json_encode($response, JSON_PRETTY_PRINT);
  }
} else {
  echo "Database Connection Failed ";

}
 */



?>
