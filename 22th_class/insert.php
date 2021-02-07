<?php

  include 'connect.php';
// fetch the data after clicking signup
  if(isset($_POST['signup'])){
    //fetech data from reg and prevent them from sql injection 


    $email = mysqli_escape_string($conn, $_POST['email']); 
    $password = mysqli_escape_string($conn, md5($_POST['psw'])); //md5 is encrypted
    $dob = mysqli_escape_string ($conn, $_POST['date']);
    
      // insert query

    $sql = "INSERT INTO user (email,password,dob) VALUES ('$email', '$password', '$dob')";
    // execute insert sql 
    $query= mysqli_query($conn, $sql);
    
    if($query){
      header('location:insert.php');
      http_response_code(200);
      echo "<script> alert('You are successfully registered')</script>";
    }
    else{
        // http_response_code(500);
        echo "<script> alert('Failed to registered')</script>".mysqli_error($conn);

    }
  }
    
  

?>




<?php
include 'signup.php';
?>