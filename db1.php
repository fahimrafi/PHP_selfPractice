<?php

$servername ="localhost";
$database="devskill";
$username="root";
$password="";

//  Create connection

$conn= mysqli_connect($servername,$username,$password,$database);


if(!$conn)
{
    die("Not connected" . mysqli_connect_error());
}

echo "Connected successfully \n";

$sql = "INSERT INTO students(studentid, name) values (7,'sdjfg')";

if(mysqli_query($conn,$sql))
{
    echo "New record created successfully \n";
}
else
{
    echo" Error: " .$sql."\n". mysqli_error($conn);
}
mysqli_close($conn);





?>