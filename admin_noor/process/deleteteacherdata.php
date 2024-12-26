



<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','registration');
$query="delete from teacher where t_id='$id'";
$execute=mysqli_query($conn,$query);
if($execute)
 {
    header('Location:../teacher_table.php?msg=success');
    exit();
 }else
 {
    header('Location:../teacher_table.php?msg=failed');
    exit;
 }
?>