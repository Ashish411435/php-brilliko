<?php
require_once 'formDataBase.php';
$id = $_GET['id'];
$query = "SELECT * FROM users2 WHERE id = $id";
$result = $vamp->query($query);
if($result == null){
    echo "Oops! Something went wrong....";
    exit;
}
$row = $result->fetch_assoc();
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
          <form action="update.php" method="post">
               <div class="form-group">
                 <label for="">Name</label>
                 <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
               </div>
               <div class="form-group">
                 <label for="">Mobile</label>
                 <input type="text"  name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control">
               </div>
               <div class="form-group">
                 <label for="">Email</label>
                 <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
               </div>
               <div>
                   <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
               </div>
               <div class="form-group">
                 <button class="btn btn-success btn-sm">Submit</button>
               </div>
          </form>
    </div>
</body>
</html>