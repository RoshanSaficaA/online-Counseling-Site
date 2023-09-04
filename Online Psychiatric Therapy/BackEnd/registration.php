<?php
session_start();
header('location:login.php');
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'dracula');
$name= $_POST['user'];
$email= $_POST['email'];
$pass= $_POST['password'];
$s= "select * from logintable1 where name= '$name' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
echo" Username Already exist ";
}
else{
    $reg="insert into logintable1( name, email, password) values  ('$name','$email','$pass')";
mysqli_query($con,$reg);
echo"Registration Successful";
}
?>
