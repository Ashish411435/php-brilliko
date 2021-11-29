<?php
$con = new mysqli("localhost","root","","bcm");

$query = "SELECT * FROM students";
$run = 0;
function addToQuery($name)
{
    global $run;
    global $query;
    if( isset( $_GET[$name] ) )
    {
        $val = $_GET[$name];
        if( $val != null )
        {
            $use = $query." AND ";
            if( $run == 0)
            {
                $use = $query ." WHERE ";
            }

            // SELECT * FROM students WHERE gender = 'male' AND city = 'Ludhiana'
            $query = $use . " $name = '$val' ";
            $run++;

        }
    }
}


function isSelected($name,$val)
{
    // $_GET['gender'] == 'Male'
    if( isset( $_GET[$name] ) )
    {
         if($_GET[$name] == $val)
         {
             return "selected";
         }
    }
    return null;
}

addToQuery("gender");
addToQuery("city");
addToQuery("rating");

$results = $con->query($query);
if($results == null){
    echo $query."<br>";
    echo $con->error;
    exit;
}