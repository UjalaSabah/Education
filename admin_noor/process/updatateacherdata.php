<?php
$conn=mysqli_connect('localhost','root','','registration');
$firstname=$_GET['firstName'];
$lastname=$_GET['lastName'];
$email=$_GET['email'];   
$phone=$_GET['phone']; 
$subjectspecialization=$_GET['subjectspecialization'];
$address=$_GET['address'];
$city=$_GET['city']; 
$country=$_GET['country'];
$id=$_GET['id']; 
// echo $firstname;
// echo "<br>";
// echo $lastname;echo "<br>";
// echo $fathername;echo "<br>";
// echo $DOB;echo "<br>";
// echo $email;echo "<br>";
// echo $password;echo "<br>";
// echo $phone;echo "<br>";
// echo $CNICnumber;echo "<br>";
// echo $address;echo "<br>";
// echo $city;echo "<br>";
// echo $country;echo "<br>";
$query="update teacher SET t_firstname='$firstname',t_lastname='$lastname',t_email='$email',t_phonenumber='$phone',t_subjectspecialization='$subjectspecialization',t_address='$address', t_city='$city',t_country='$country' where t_id='$id'";
$execution=mysqli_query($conn,$query);
if($execution)
{
   header('Location:../teacher_table.php?msg=update');
   
}else
{
   header('Location:../teacher_table.php?msg=notupdate');
  
}
?>