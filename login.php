<?php
$conn=mysqli_connect("localhost","root","","hello");
if($conn)
{
    echo "Connected";
}
else
echo "failed to connect";

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


$data="INSERT INTO student Values('','$FirstName','$LastName','$mobile','$email','$username','$password')";
$check=mysqli_query($conn,$data);
if($check)
{
    echo "data sended";
}
else
echo "data not send";
?>