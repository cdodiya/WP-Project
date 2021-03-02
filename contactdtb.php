<?php
$name="";
$email="";
$sub="";
$msg="";
$conn= mysqli_connect('localhost','root','','contactform');

if (isset($_POST['send'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $sub = mysqli_real_escape_string($conn, $_POST['sub']);
  $msg = mysqli_real_escape_string($conn, $_POST['msg']);
  }

$query = "INSERT INTO contact (name, email, sub, msg) 
  			  VALUES('$name', '$email', '$sub', '$msg')";
mysqli_query($conn, $query);
header('location: contact.php');
?>