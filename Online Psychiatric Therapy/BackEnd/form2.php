<?php
$conn =mysqli_connect('localhost','root','');
mysqli_select_db($conn,'dracula');
// Get data from form2
$question_1 = $_POST['question_1'];
$question_2 = $_POST['question_2'];
$question_3= $_POST['question_3'];
$question_4= $_POST['question_4'];
$question_5= $_POST['question_5'];
$question_6= $_POST['question_6'];
$question_7= $_POST['question_7'];
$question_8= $_POST['question_8'];
$question_9= $_POST['question_9'];
$question_10= $_POST['question_10'];
$reg="insert into form2(question_1,question_2,question_3,question_4,question_5,question_6,question_7,question_8,question_9,question_10) values ('$question_1','$question_2','$question_3','$question_4','$question_5','$question_6','$question_7','$question_8','$question_9','$question_10')";
if(!$result = $conn->query($reg)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
  header('location:form3.html');
    }
?>