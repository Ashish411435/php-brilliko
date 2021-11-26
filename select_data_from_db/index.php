<?php
require_once("db.php");
// require_once "db.php";
$query = "SELECT * FROM students";
$results = $con->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

  
   <div class="container">
       <table class="table table-bordered">
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>City</th>
               <th>Del</th>
           </tr>
           <?php 
           foreach($results as $row) { ?>
           <tr>
               <td> <?php echo $row['id'] ?> </td>
               <td> <?php echo $row['name'] ?> </td>
               <td> <?php echo $row['city'] ?> </td>
               <td> 
                 <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm"> Del </a>    
               </td>
           </tr>
           <?php } ?>
       </table>
   </div>
    
</body>
</html>