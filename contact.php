<?php
$nm=$_POST["name"];
$em=$_POST["email"];
$num=$_POST["number"];
$sub=$_POST["subject"];
$mess=$_POST["message"];
    
$conn=mysqli_connect("localhost","root","","umcrgh");
$sql="INSERT INTO `contact` (`Name`, `email`, `number`, `subject`, `message`) VALUES ('$nm','$em', '$num', '$sub', '$mess')";
    
$result=mysqli_query($conn, $sql);
?>