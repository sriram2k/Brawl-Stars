<?php

$user=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

$connect=mysqli_connect("localhost","root","","brawlstars");

$sql="insert into signup values('','$user','$pass','$email')";

mysqli_query($connect,$sql);

header("location:index.html");

 ?>
