<?php
$con =mysqli_connect("localhost", "root", "", "LoginSystem");
//check connection
if (mysqli_connect_errno()){
    echo "Failed to connect ot MySQL: " . mysqli_connect_errno();
}


?>