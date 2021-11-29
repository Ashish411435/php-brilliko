<?php
require_once 'functions3.php';
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
            <form action="" method="get">
                <div class="row">
                    <!-- Col Start -->
                    <div class="col-md-4">
                        <select name="category" class="form-control" id="">
                            <option value="">All Category</option>
                            <option value="Mobile" <?= isSelected("category", "Mobile")?> >Mobile</option>
                            <option value="Clothes" <?= isSelected("category", "Clothes")?> >Clothes</option>
                            <option value="Watch" <?= isSelected("category", "Watch")?> >Watch</option>
                        </select>
                    </div>
                    <!-- Col End -->

                    <!-- Col Start -->
                    <div class="col-md-4">
                        <select name="segment" class="form-control" id="">
                            <option value="">All Segments</option>
                            <option value="Budget" <?= isSelected("segment", "Budget")?> >Budget</option>
                            <option value="Premium" <?= isSelected("segment", "Premium")?> >Premium</option>
                        </select>
                    </div>
                    <!-- Col End -->

                    <!-- Col Start -->
                    <div class="col-md-4">
                        <select name="rating" class="form-control" id="">
                            <option value="">All Ratings</option>
                            <option value="1" <?= isSelected("rating", 1)?> >1</option>
                            <option value="2" <?= isSelected("rating", 2)?> >2</option>
                            <option value="3" <?= isSelected("rating", 3)?> >3</option>
                            <option value="4" <?= isSelected("rating", 4)?> >4</option>
                            <option value="5" <?= isSelected("rating", 5)?> >5</option>
                        </select>
                    </div>
                    <!-- Col End -->
                    <div class="col-md-4 mt-3">
                        <button class="btn btn-primary bt-lg">Apply Filter</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <section class="mb-4">
        <table class="table table-bordered text-center table-striped ">
            <tr>
                <th style="color: green;">Sr No.</th>
                <th style="color: green;">Title</th>
                <th style="color: green;">Category</th>
                <th style="color: green;">Segment</th>
                <th style="color: green;">Rating</th>
            </tr>
            <?php
            foreach ($result as $row) { ?>

                <tr >
                    <td style="color: black;"> <?= $row['Sr No.'] ?> </td>
                    <td style="color: red;"> <?= $row['title'] ?> </td>
                    <td style="color: red;"> <?= $row['category'] ?> </td>
                    <td style="color: red;"> <?= $row['segment'] ?> </td>
                    <td style="color: red;"> <?= $row['rating'] ?> </td>
                </tr>

            <?php
            }
            ?>
        </table>
    </section>

    <!-- <div class="container mt-4"> -->

    <!-- </div> -->

    </div>
</body>

</html>