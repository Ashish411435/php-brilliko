<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-group{
            margin-bottom:20px;
        }
    </style>
</head>
<body>
        
    <form action="handle.php" method="post">
    <div>
         <div class="form-group">
             <label for="">Name</label> <br>
             <input type="text" required name="name" id="">
         </div>
         <div class="form-group">
             <label for="">City</label> <br>
             <input type="text" name="city" required id="">
         </div>
         <div class="form-group">
            <button>Submit</button>
         </div>
    </div>
    </form>

</body>
</html>