<?php
 require_once 'functions2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="container mt-4">

             <section class="mb-4">
                 <form action="" method="GET">
                    <div class="row">
                        <!-- col start -->
                        <div class="col-md-4">
                                <label for="">Select Gender</label>
                            <select name="gender" id="" class="form-control">
                                <option value="">All Gender</option>
                                <option value="Male" <?= isSelected("gender","Male") ?>>Male</option>
                                <option value="female" <?= isSelected("gender","Female") ?>>Female</option>
                            </select>
                        </div>
                        <!-- col end -->

                        <!-- col start -->
                        <div class="col-md-4">
                                <label for="">Select City</label>
                            <select name="city" id="" class="form-control">
                                <option value="">All Cities</option>
                                <option value="Ludhiana" <?= isSelected("city","Ludhiana") ?>>Ludhiana</option>
                                <option value="Himachal" <?= isSelected("city","Himachal") ?>>Himachal</option>
                            </select>
                        </div>
                        <!-- col end -->
                        
                        <!-- col start -->
                        <div class="col-md-4">
                                <label for="">Select Rating</label>
                            <select name="rating" id="" class="form-control">
                                <option value="">All Rating</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <!-- col end -->

                        <!-- col start -->
                        <div class="col-md-4">
                             <button class="btn btn-success mt-4">Apply Filter</button>
                        </div>
                        <!-- col end -->


                    </div>
                 </form>
             </section>

             <section>
               <table class="table table-bordered text-center table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Rating</th>
                    </tr>
                    <?php
                    foreach($results as $row)
                    { ?>

                        <tr>
                            <td> <?= $row['id'] ?> </td>
                            <td> <?= $row['name'] ?> </td>
                            <td> <?= $row['gender'] ?> </td>
                            <td> <?= $row['city'] ?> </td>
                            <td> <?= $row['rating'] ?> </td>
                        </tr>

                    <?php
                        }
                    ?>
                </table>
               
             </section>
        </div>
</body>
</html>