<?php
$conn=mysqli_connect('localhost','root','','registration');
$coursename=$_GET['coursename'];
$description=$_GET['description'];
$id=$_GET['id']; 
$query="UPDATE courses SET c_name='$coursename',c_desc='$description' where c_id='$id'";
$execution=mysqli_query($conn,$query);
if($execution)
{
   header('Location:../courses_list.php?updatemsg=update');
   
}else
{
   header('Location:../courses_list.php?updatemsg=notupdate');
  
}
?>



















