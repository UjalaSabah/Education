<?php
$connection = mysqli_connect('localhost', 'root', '', 'registration');
$id=$_GET['id'];
$status=$_GET['active'];
$query="update student_enroll SET active='$status'where s_id = '".$id."'";
$execution=mysqli_query($connection,$query);
 if($execution)
 {
    header('Location:../enrollstudent.php');
    exit();
 }else
 {
    header('Location:../enrollstudent.php?msg=failed');
 }
?>