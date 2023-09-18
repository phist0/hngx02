<?php



$url = $_SERVER["REQUEST_URI"];
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$id = substr($url, strrpos($url, '/') + 1);
//preg_match('/^[0-9]+$/', $str);

if($uri === "/api" && $_SERVER["REQUEST_METHOD"] === "POST"){
  require "controllers/create.php";
}else if(preg_match('/^[1-9][0-9]*+$/', $id) && $uri === "/api/".$id && $_SERVER["REQUEST_METHOD"] === "GET" ){
  require "controllers/read.php";
}else if(preg_match('/^[1-9][0-9]*+$/', $id) && $uri === "/api/".$id && $_SERVER["REQUEST_METHOD"] === "PUT" ){
  require "controllers/update.php";
}else if(preg_match('/^[1-9][0-9]*+$/', $id) && $uri === "/api/".$id && $_SERVER["REQUEST_METHOD"] === "DELETE" ){
  require "controllers/delete.php";
}

//echo "<h1>  Hello World  </h1>"
//
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h1>  Visit the /api  endpoint of this api  to perform CRUD actions on users!  </h1>";



?>
