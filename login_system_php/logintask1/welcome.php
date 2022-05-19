<?php
session_start();
require_once("db_connect.php");

if (isset($_SESSION['email']) == false) {
    header("locataion: login.php");
    exit;
}

$email = $_SESSION['email'];

$query = "SELECT * FROM proofs2 WHERE email = '$email' ";
$result = $con->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <div class="container">
        <?php
        foreach($result AS $final_result) {
        ?>
            <h4>Welcome <?php echo $final_result['firstName']; ?></h4>
            <img src="<?php echo $final_result['certificate']; ?> " style="width:500px" alt="">

        <?php
        }
        ?>
    </div>
</body>

</html>