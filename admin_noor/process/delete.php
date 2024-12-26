<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','registration');
$query="delete from user_table where id='$id'";
$execute=mysqli_query($conn,$query);
if($execute)
 {
    header('Location:../form_table.php?msg=success');
    exit();
 }else
 {
    header('Location:../form_table.php?msg=failed');
    exit;
 }
?>