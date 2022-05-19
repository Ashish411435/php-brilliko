<?php
session_start();
require_once("db_connect.php");

if (isset($_SESSION['email']) == false) {
    header("location: login.php");
    exit;
}

$email = $_SESSION['email'];
$query = "SELECT * FROM proofs3 WHERE email = '$email'";
$result = $con->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
        .logout-btn{
            position: absolute;
            right: 0px;
        }
    </style>
</head>

<body>
    <?php
    foreach ($result as $finalResult) {
    ?>

        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>Welcome <?php echo $finalResult['fullname'] ?> Page</h1>
            <p>Resize this responsive page to see the effect!</p>
        </div>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Me</h2>
                    <h5>Photo of me:</h5>
                    <div class="fakeimg">Fake Image</div>
                    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                    <h3>Some Links</h3>
                    <p>Lorem ipsum dolor sit ame.</p>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                    </ul>
                    <hr class="hidden-sm hidden-md hidden-lg">
                </div>
                <div class="col-sm-8">
                    <h2>TITLE HEADING</h2>
                    <h5>Title description, Dec 7, 2017</h5>
                    <div class="fakeimg">
                        <img src="<?php echo $finalResult['cv']; ?> " style="height:200px" style="width:800px" alt="">
                    </div>
                    <br>
                    <h2>TITLE HEADING</h2>
                    <h5>Title description, Sep 2, 2017</h5>
                    <div class="fakeimg">Fake Image</div>
                    <p>Some text..</p>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
            </div>
        </div>


        <div class="jumbotron text-center" style="margin-bottom:0">
            <p>Footer</p>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-4 pb-2">
                <div class="mt-4 pt-2 logout-btn">
                    <a href="logout.php">
                        <button class="btn btn-primary btn-lg">Logout</button>
                    </a>
                </div>
            </div>
        </div>


    <?php
    }
    ?>

</body>

</html>