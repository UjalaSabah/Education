



<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','registration');
$query="delete from courses where c_id='$id'";
$execute=mysqli_query($conn,$query);
if($execute)
 {
    header('Location:../courses_list.php?msg=success');
    exit();
 }else
 {
    header('Location:../courses_list.php?msg=failed');
    exit;
 }
?>