<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form Task</title>
    <style>
        body{
            background-color: rgb(248, 208, 208);
            font-size: 20px;
        }
    </style>
</head>
<body>
    <form action="post_form_task_backend.php" method ="POST" enctype="multipart/form-data">
    
        <div>
            <label for="">First name* :</label>
            <input type="text" name="firstName">
            <label for="">Last Name* :</label>
            <input type="text" name="lastName">
        </div>
        <br>
        <div>
            <label for="">D.O.B* :</label>
            <input type="text" name="dob">
            &nbsp;
            &nbsp;
            &nbsp;
            <label for="city">City/State* :</label>
            <select name="city" id="city">
                <option >Ludhiana, Punjab</option>
                <option >Hamirpur, Himachal Pardesh</option>
                <option >Amritsar, Punjab</option>
                <option >Jalandhar, Punjab</option>
            </select>
        </div>
        <br>
        <div>
            <label for="photo">Photo*</label>
            <input type="file" name="photo" id="photo">
            <label for="certificate">Certificate*</label>
            <input type="file" name="certificate" id="certificate">
        </div>
        <br>
        <div>
            <input type="submit" value="Submit Form">
            <input type="reset" value="Reset Form">
        </div>
    </form>
</body>
</html>