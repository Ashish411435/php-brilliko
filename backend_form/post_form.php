<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        METHOD
        1) GET
        2) POST (from body and form data url encoded)
     -->
    
    <form action="handle_post_form.php" method="POST"  enctype="multipart/form-data" >

            <div>
                <label for="">Name</label>
                <input type="text" name="name">
            </div>
            <br>
            <div>
                <label for="">City</label>
                <input type="text" name="city">
            </div>
            <br>
            <div>
                <label for="">State</label>
                <input type="text" name="state" id="">
            </div>
            <div>
                <input type="file" name="photo">
            </div>
            <br>
            <div>
                <button>Submit</button>
            </div>

    </form>

</body>
</html>