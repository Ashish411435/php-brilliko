<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <form action="handle.php" method="post">
            <div>

                <label for="">Name : </label>
                <input type="text" name="name" required maxlength="10" minlength="3" placeholder="Enter Your Name" id="">
            </div>
            <br>
            <div>

                <label for="">Gender : </label>
                <select name="gender" required  id="">
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <br>
            <div>
                
                <label for="">City :</label>
                <input type="text" name="city" required maxlength="10" placeholder="Enter City Name" id="">
            </div>
            <br>
            <div>
                <button>Submit</button>
            </div>



        </form>
    </div>
</body>
</html>