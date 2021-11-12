<?php

class User
{
     public $name = "Bob";
     public $age = 10;
     public function wakeup()
     {
         return "Good Morning";
     }
}
$user = new User();
$user2 = new User();

$user->age = 39;
echo $user->wakeup();
echo $user->name;
echo $user->age;
echo "<br>";
echo $user2->age;