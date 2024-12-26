<?php
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$email=$_GET['email']; 
$password=$_GET['password'];
$fathername=$_GET['fathername'];
$DOB=$_GET['dob'];   
$phone=$_GET['phone']; 
$CNICnumber=$_GET['cnic'];
$address=$_GET['address'];
$city=$_GET['city']; 
$country=$_GET['country'];
$connection=mysqli_connect('localhost','root','','registration');
$query="insert INTO user_table SET Firstname='$firstname',Lastname='$lastname',Email='$email',Password='$password',Fathername='$fathername', DOB='$DOB',Phone='$phone',CNICnumber='$CNICnumber',Address='$address', City='$city',Country='$country'";
$execution=mysqli_query($connection,$query);
if($execution)
 {
    header('Location:../index.php?msg=success');
    exit();
 }else
 {
    header('Location:../index.php?msg=failed');
 }


?>