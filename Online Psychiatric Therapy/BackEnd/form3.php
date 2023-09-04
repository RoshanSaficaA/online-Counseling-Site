<?php
session_start(); 
$conn =mysqli_connect('localhost','root','');
mysqli_select_db($conn,'dracula');
// Get data from form2
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob= $_POST['dob'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$status= $_POST['status'];
$community= $_POST['community'];
$nationality= $_POST['nationality'];
$number= $_POST['number'];
$email= $_POST['email'];
$address= $_POST['address'];
$city= $_POST['city'];
$state= $_POST['state'];
$zip_code= $_POST['zip_code'];
$reg="insert into form3(first_name,last_name,dob,age,gender,status,community,nationality,number,email,address,city,state,zip_code) values ('$first_name','$last_name','$dob','$age','$gender','$status','$community','$nationality','$number','$email','$address','$city','$state','$zip_code')";
if(!$result = $conn->query($reg)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        $_SESSION['first_name'] =$first_name;
        $_SESSION['age'] =$age;
        $_SESSION['gender'] =$gender;
    header('location:session1.php');
    }
?>