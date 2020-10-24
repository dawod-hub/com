<?php


$conn = mysqli_connect('localhost','root','','sms');
if($conn == false)
{
    echo "connection is error".mysqli_connect_error();
}
else{
    echo "connection is ok";
}
?>