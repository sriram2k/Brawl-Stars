<?php

$user=$_POST['uname'];
$pass=$_POST['pass'];

$connect=mysqli_connect("localhost","root","","brawlstars");

$sql="select * from signup where uname='$user' ";

$result=mysqli_query($connect,$sql);


if($result!=false){

while($row=mysqli_fetch_array($result)){
$check= $row["pass"];

}
mysqli_free_result($result);
mysqli_close($connect);
}

if($check == $pass){
  header("location:home.html");
}
else{
  header("location:login.html");
}

 ?>
