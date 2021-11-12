<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Task</title>
    <style>
        body{
            background-image:url(images/naruto.jpg);
        }
        .mainContainer{
            width: 550px;
            margin: auto;
            position: absolute;
            padding: 20px 50px;
            background-color: white;
            border-radius: 20px;
            left: 22%;
            top: 1%;
            border: 1px solid black;
        }
        .mainContainer div{
            margin-bottom: 10px;

        }
        .mainContainer2{
            /* border: 1px solid black; */
            margin-left: -16px;
        }
        .container1{
            /* border: 1px solid rgb(240, 237, 237); */
            display: inline-block;
            margin-left: 37%;

        }
        .container2{
            /* border: 1px solid black; */
            width: 35%;
            margin-left: 30%;
            margin-bottom: 5%;
        }
        
        .container2 h4{
            /* border: 1px solid black; */
            margin: 1px;
            font-size: 20px;

        }
        .container2 p{
            /* border: 1px solid black; */
            margin: 1px;
            padding-left: 28px;
        }
        
        .form div{
            margin-bottom: 5%;
        }
        .form input{
            width: 100%;
            border: 1px solid rgb(92, 90, 90);
            border-radius: 5px;
            padding-left: 15px;
            line-height: 40px;
        }
        .form select{
            width: 103%;
            border: 1px solid rgb(92, 90, 90);
            border-radius: 5px;
            padding: 10px 0px 10px 15px;
            padding: 10px 0px 10px 15px;
            display: inline-block;
            font: inherit;
            font-size: 19px;
            box-sizing: border-box;
        }
        .form div button{
            justify-content: center;
            background-color: rgb(56, 56, 170);
            color: white;
            margin-left: 1%;
            width: 100%;
            padding-left: 10px;
            border-radius: 12px;
            font-size: 22px;
            letter-spacing: 1px;
        }
        .footer h6{
            margin-left: 15%;
            font-size: 75%;
            font-weight: 0%;
        }
        .footer h6 strong{
            color: red;
        }


    </style>
</head>
<body>
    <div class="mainContainer">
        <div class="mainContainer2">
        <div class="container1">
            <img src="images/logo.svg" width="100px" alt="">
        </div>
        <div class="container2">
            <h4>Book Your Free Class</h4>
            <p>Limited Spots Left </p>
        </div>
        <div class="form">
            <form action="formTaskBackend.php" method="post">
                <div>
                <!-- Name -->
                <input type="text" name="name" required placeholder="Your Name" id="">
                </div>
                <div>
                <!-- Email-->
                <input type="email" name="email" required placeholder="Email ID" id="">
                </div>
                <div>
                <!-- Mobile Number-->
                <input type="number" name="mobile" required placeholder="Mobile Number" id="">
                </div>
                <div>
                <select name="course" id="" required>
                    <option value="">Select Course</option>
                    <option>Web Development</option>
                    <option>Web Designing</option>
                    <option>VFX</option>
                    <option>Java-Script</option>
                    <option>Python</option>
                </select>
                </div>
                <div>
                <select name="centre" id="" required>
                    <option value="">Select Centre</option>
                    <option>Ludhiana</option>
                    <option>Jalandhar</option>
                </select>
                </div>
                <div>
                <button>Book Free Classes</button>
                </div>
                <div class="footer">
                <h6>By registering here, I agree to Brilliko <strong> Terms & Conditions </strong> and <strong> Privacy Policy </strong></h6>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>
</html>