<?php
$con = new mysqli("localhost","root","","products");

$query = "SELECT * FROM items";
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
            if( $run == 0)
            {
                $use = $query ." WHERE ";
            }     
            else
            {
               $use = $query." AND ";
            }
            //SELECT * FROM items WHERE gender = 'male'     
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

addToQuery("category");
addToQuery("segment");
addToQuery("rating");

$result = $con->query($query);
if($result == null){
    echo $query."<br>";
    echo $con->error;
    exit;
}