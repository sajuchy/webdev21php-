<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "crud_db";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("connection failed" .mysqli_connect_error());

}

  $sql= "Create DATABASE $dbname";
  $query =mysqli_query($conn, $sql);

  if($query){
      echo "DATABASE CREATED SUCCESSFULLY";
  }

  else{
    echo "DATABASE DOES CREATE".mysql_error($conn);
  }
    mysqli_close($conn);

?>