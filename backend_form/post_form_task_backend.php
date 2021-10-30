<?php
$firstName = $_POST['firstName'];
echo "Name = " . $firstName;
$lastName = $_POST['lastName'];
echo $lastName;
echo "<br>";

$dob = $_POST['dob'];
echo "Date of Birth = " . $dob;
echo "<br>";

$city = $_POST['city'];
echo "City = " . $city;
echo "<br>";

/* Photo */
$photo = $_FILES["photo"];
$tmp_name = $photo['tmp_name'];
$photoName = "photo/" . time() . $photo['name'];
move_uploaded_file($tmp_name , $photoName);
echo "<img src ='$photoName' style = 'width:100px'>";

/* Certificate Image */
$certificate = $_FILES["certificate"];
$tmp_name = $certificate['tmp_name'];
$certificateName = "certificate/" . time() . $certificate['name'];
move_uploaded_file($tmp_name, $certificateName);

echo "<img src='$certificateName' style='width:100px'>";