


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center display-4 text-success">Crud operation</h2>
  <p class="text-center text-danger">User Information</p> 
  <a href="insert.php" class="btn btn-primary" target="_blank">Add New</a>           
  <table class="table">
    <thead>
      <tr>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Action</th>
      </tr>
    </thead>
     
    <tbody>
    <?php

        include 'connect.php';

        $sql= "SELECT * FROM user";
        $query= mysqli_query($conn, $sql);

          if($query){
            if(mysqli_num_rows($query)>0){
              while($row= mysqli_fetch_assoc($query)){

              

    ?>
      <tr>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['dob'] ?></td>
        <td><a href="edit.php?id=<?=$row['id'];?>" target="" class="btn btn-success">Edit</a>
            <a href="delete.php?id=<?=$row['id'];?>" target="" class="btn btn-danger">Delete</a>
        </td>
       
      </tr>
    <?php
            }
         }
      
       }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
