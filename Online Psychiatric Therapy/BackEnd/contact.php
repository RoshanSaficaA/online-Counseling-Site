<?php
session_start();

$conn =mysqli_connect('localhost','root','');
mysqli_select_db($conn,'dracula');
// Get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$reg="insert into contact( name, email,message) values  ('$name','$email','$message')";
if(!$result = $conn->query($reg)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
    
header('location:index02.html');
    }
