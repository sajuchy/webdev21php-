<?php
include 'connect.php';
if(isset($_GET)){
    $sql="DELETE FROM user where id=".$_GET['id'];
    $query=mysqli_query($conn,$sql);
    if($query){
        header('location: select.php');
    }
    else{
        echo "<script> alert('Something Went Wrong')</script>".mysqli_error($conn);
    }
}


?>