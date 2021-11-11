<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>

    <style>
        body{
            background-color: rgb(83, 165, 165);
            
        }
        #container{
            display: inline-block;
            position:absolute;
            left: 35%;
        }
        #container div{
            margin-bottom: 10px ;
        }
        
    </style>
</head>
<body>
    <div id="container">

        <form action="task3_backend.php" method="POST" enctype="multipart/form-data">
            <div>
           <label for="FirstName">First Name : </label>
           <input type="text" name="firstName" id="FirstName">
        </div> 
        <br>
        <div>
            <label for="LastName">Last Name : </label>
            <input type="text" name="lastName" id="LastName"> 
        </div> 
        <br>
        <div>
            <label for="Email">Email : </label>
            <input type="email" name="eMail" id="Email" placeholder="username@gmail.com">
        </div> 
        <br>
        <div>
            <label for="ReTypeEmail">Re-Type Email : </label>
            <input type="email" name="ReTypeEmail" id="ReTypeEmail" placeholder="username@gmail.com">
        </div> 
        <br>
        <div>
            <label for="Password">Password : </label>
            <input type="password" name="password" id="Password" placeholder="Password">
        </div> 
        <br>
        <div>
            <label for="Re-TypePassword">Re-Type Password : </label>
            <input type="text" name="ReTypePassword" id="Re-TypePassword" placeholder="Re-Type Password">
        </div> 
        <br>
        <div>
            <label for="Address">Address : </label>
            <input type="textarea" name="address" id="Address">
        </div>
        <br>
        <div>
            <label for="City">City : </label>
            <input type="text" name="city" id="City">
        </div>
        <br>
        <div>
            <label for="State">State : </label>
            <input type="text" name="state" id="State">
        </div>
        <br>
        <div>
            <label for="ZipCode"> Zip Code : </label>
            <input type="number" name="zipC
            ode" id="ZipCode" placeholder="Zip Code">
        </div>
        <br>
        <div>
            <label for="Phone">Phone : </label>
            <input type="number" name="phone" id="Phone" placeholder="Phone Number">
        </div>
        <br>
        <div>
            <label for="DOB">Date Of Birth : </label>
            <input type="" name="dob" id="DOB" placeholder="dd/mm/yyyy">
        </div>
        <br>
        <div>
            <label for="">Gender : </label>
            <input type="radio" name="gender" id="">Male
            <input type="radio" name="gender" id="">Female
            <input type="radio" name="gender" id="">Others
        </div>
        <br>
        <div>
            <label for="SecurityQuestion">Security Question</label>
            <select name="securityQuestion" id=""></select>
        </div>
    </form>
</div>
</body>
</html>