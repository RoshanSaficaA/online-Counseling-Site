<?php
$conn =mysqli_connect('localhost','root','');
mysqli_select_db($conn,'dracula');
// Get data from form1
$name = $_POST['name'];
$gender= $_POST['gender'];
$number= $_POST['number'];
$email= $_POST['email'];
$address= $_POST['address'];
$city= $_POST['city'];
$state= $_POST['state'];
$zip_code= $_POST['zip_code'];
$reg="insert into form1(name,gender,number,email,address,city,state,zip_code) values ('$name','$gender','$number','$email','$address','$city','$state','$zip_code')";
if(!$result = $conn->query($reg)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
    header('location:form2.html');
    }
?>