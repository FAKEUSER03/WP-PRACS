<?php
include 'connection.php';
$sql="DELETE FROM user WHERE username='Preksha".$_GET[" "]."'";

if(mysqli_query($conn,$sql))
{
    echo "Record Deleted";
}
else{
    echo "Error" .mysqli_error($conn);
}
mysqli_close($conn)
?>
