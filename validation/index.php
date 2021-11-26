<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="handle.php">
            <label for="">Full Name</label>
            <input type="text" name="fullname" required maxlength="10">
            <br>
            <label for="">Course</label>
            <br>
            <input type="checkbox" name="course[]" value="html"> HTML <br>
            <input type="checkbox" name="course[]" value="css"> CSS <br>
            <input type="checkbox" name="course[]"value="js"> JS <br>
            <input type="checkbox" name="course[]" value="php"> PHP <br>
            <button>Submit</button>
    </form>

</body>
</html>