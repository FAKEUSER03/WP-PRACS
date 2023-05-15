<?php
include "connection.php";
$sql="SELECT * from user";
$result=$conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo $row['username']."<br>";
    }
}
else{
    echo "No records found";
}

?>