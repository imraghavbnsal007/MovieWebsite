<?php
include "dbconnect.php";

$Name=$_POST["name"];
mysqli_real_escape_string($conn, $Name);

$sql="INSERT INTO table1(Name) VALUES ('$Name');";

if (mysqli_query($conn, $sql))
{
    echo "New Record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);