<?php
session_start();

require_once("track_certificate_db.php");

if (isset($_SESSION['mobile']) == false) {
    header("location:login_certificate.php");
    exit;
}
$mobile = $_SESSION['mobile'];
$query = "SELECT * FROM proofs WHERE mobile = '$mobile'";
$result = $con->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Certificate</title>
    <style>
        .logout-btn {
            position: absolute;
            right: 20px;
            top: 10px;
            background-color: blue;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logout-btn">
            <a href="logout_certificate.php"><button>Logout</button></a>
        </div>
        <br>

        <div class="box">
            <?php
            foreach ($result as $final_result) {

            ?>
                <h4>Welcome <?php echo $final_result['mobile']; ?> </h4>
                <img src="<?php echo $final_result['certificate']; ?>" style="Width:900px" alt="">

            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>